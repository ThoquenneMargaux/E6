package fr.gsb.appliRV.modeles;

import java.sql.ResultSet;
import java.util.ArrayList;
import java.util.GregorianCalendar;

import javax.swing.JOptionPane;

import com.mysql.jdbc.Connection;
import com.mysql.jdbc.PreparedStatement;
import com.mysql.jdbc.Statement;

import fr.gsb.appliRV.entites.Praticien;
import fr.gsb.appliRV.entites.RapportVisite;
import fr.gsb.appliRV.entites.Visiteur;
import fr.gsb.appliRV.technique.ConnexionBD;


public class ModeleAppliRV {
	
	private static ModeleAppliRV modele = null ;
	
	private ModeleAppliRV() {
		super(); 
	}

	public static ModeleAppliRV getModele() {
		if (modele == null) {
			modele = new ModeleAppliRV() ;
		}
		return modele;
	}
	
	public boolean seConnecter(String matricule,String mdp) throws Exception {
		System.out.println(matricule) ;
		
		Connection connexion = ConnexionBD.getConnexion() ;

		String requete = "SELECT VISITEUR.*"
	            + " FROM VISITEUR INNER JOIN TRAVAILLER ON VISITEUR.VIS_MATRICULE = TRAVAILLER.VIS_MATRICULE"
	            + " WHERE VISITEUR.VIS_MATRICULE = ?"
	            + " AND VIS_MDP = ?"
	            + " AND TRAVAILLER.JJMMAA = (Select max(JJMMAA) from TRAVAILLER T2 where T2.VIS_MATRICULE = TRAVAILLER.VIS_MATRICULE AND TRAVAILLER.TRA_ROLE = 'Délégué')";
		
			 
		PreparedStatement requetePreparee = (PreparedStatement) connexion.prepareStatement(requete) ;
		
		requetePreparee.setString(1, matricule);
		requetePreparee.setString(2, mdp);

		ResultSet resultat = requetePreparee.executeQuery() ;
		
		
		boolean connexionOk ;
		
		if(resultat.next()){

			connexionOk = this.connecter(matricule,mdp) ;
		}
		else {

			connexionOk = false ;
		}
		
		requetePreparee.close();
		System.out.println("" + connexionOk) ;
		
		return connexionOk ;
	}
	
	public boolean connecter(String matricule, String mdp) throws Exception {

		Connection connexion = ConnexionBD.getConnexion() ;

		String requete = "update VISITEUR"
				+ " set VIS_CONNEXION = true"
				+ " where VIS_MATRICULE = ?"
				+ " and VIS_MDP = ?";
		
		PreparedStatement requetePreparee = (PreparedStatement) connexion.prepareStatement(requete) ;
		
		requetePreparee.setString(1,matricule);
		requetePreparee.setString(2,mdp);

		int nb = requetePreparee.executeUpdate() ;
		
		boolean connexionOk ;
		
		if( nb == 1){
			connexionOk = true ;
		}
		else {
			connexionOk = false ;
		}
		
		requetePreparee.close() ;
		
		return connexionOk ;                            
	}
	
	public boolean estConnecte(String matricule) throws Exception {
		
		Connection connexion = ConnexionBD.getConnexion() ;
	
		String requete = "select VIS_CONNEXION"
				+ " from VISITEUR"
				+ " where VIS_MATRICULE = ?" ;
		
		PreparedStatement requetePreparee = (PreparedStatement) connexion.prepareStatement(requete) ;
		
		requetePreparee.setString(1, matricule);
		
		ResultSet resultat = requetePreparee.executeQuery() ;
		
		boolean etatConnecte ;
		
		if(resultat.next()){
			
			etatConnecte = resultat.getBoolean("VIS_CONNEXION") ;
		}
		else {

			etatConnecte = false ;
		}
		
		requetePreparee.close() ;
		
		return etatConnecte ;
	}
	
	public boolean deconnecter(String matricule) throws Exception {
		Connection connexion = ConnexionBD.getConnexion();
		String requete = "update VISITEUR"
				+ " set VIS_CONNEXION = false"
				+ " where VIS_MATRICULE = ?";
		PreparedStatement requetePreparee = (PreparedStatement) connexion.prepareStatement(requete);
		requetePreparee.setString(1, matricule);
		int nb = requetePreparee.executeUpdate();
		boolean connexionOk;
		if(nb == 1){
			connexionOk = true;
		} else{
			connexionOk = false;
		}
		
		requetePreparee.close();
		return connexionOk;
	}
	
	public static ArrayList<Visiteur> getVisiteurs(String matricule) throws Exception {
		
		Connection connexion = ConnexionBD.getConnexion() ;

		String requete = "SELECT VISITEUR.*" 
				+ " FROM VISITEUR INNER JOIN TRAVAILLER" 
				+ " ON VISITEUR.VIS_MATRICULE = TRAVAILLER.VIS_MATRICULE" 
				+ " WHERE TRAVAILLER.JJMMAA = " + "(Select max(JJMMAA)" 
				+ " from TRAVAILLER T2" + " where T2.VIS_MATRICULE = TRAVAILLER.VIS_MATRICULE AND TRAVAILLER.TRA_ROLE = 'Visiteur')" 
				+ " AND REG_CODE = " 
				+ "(SELECT DISTINCT REG_CODE" 
				+ " FROM TRAVAILLER INNER JOIN VISITEUR" 
				+ " ON TRAVAILLER.VIS_MATRICULE = VISITEUR.VIS_MATRICULE" 
				+ " WHERE VISITEUR.VIS_MATRICULE = ?)"; 
				
		
		PreparedStatement requetePreparee = (PreparedStatement) connexion.prepareStatement(requete) ;
		
		requetePreparee.setString(1, matricule);
		
		ResultSet resultat = requetePreparee.executeQuery() ;
		
		ArrayList<Visiteur> lesVisiteurs = new ArrayList<Visiteur>() ;
		
		while(resultat.next()){
			
			Visiteur unVisiteur = new Visiteur() ;
			
			unVisiteur.setMatricule(resultat.getString("VIS_MATRICULE") );
			unVisiteur.setConnecte( resultat.getBoolean("VIS_CONNEXION") );
			unVisiteur.setPrenom( resultat.getString("VIS_PRENOM")) ;
			unVisiteur.setAdresse( resultat.getString("VIS_ADRESSE")) ;
			unVisiteur.setCp( resultat.getString("VIS_CP")) ;
			unVisiteur.setVille( resultat.getString("VIS_VILLE")) ;
			unVisiteur.setDateEmbauche( resultat.getDate("VIS_DATEEMBAUCHE")) ;
			unVisiteur.setCodeSecteur( resultat.getString("SEC_CODE")) ;
			unVisiteur.setCodeLaboratoire( resultat.getString("LAB_CODE")) ;
			unVisiteur.setNom( resultat.getString("VIS_NOM")) ;

			lesVisiteurs.add( unVisiteur ) ;
		}
		

		requetePreparee.close() ;

		return lesVisiteurs ;
	}
	
	public static ArrayList<RapportVisite> getRapportVisite(Visiteur visiteur, int annee, int mois) throws Exception {

		Connection connexion = ConnexionBD.getConnexion() ;

		String requete = "select PRATICIEN.* , RAPPORT_VISITE.*" 
				+ " from PRATICIEN "
				+ " INNER JOIN RAPPORT_VISITE"
				+ " ON PRATICIEN.PRA_NUM = RAPPORT_VISITE.PRA_NUM"
				+ " where RAPPORT_VISITE.VIS_MATRICULE = ?"
				+ " and YEAR(RAP_DATE) = ?"
				+ " and MONTH(RAP_DATE) = ?" ;
		
		
		PreparedStatement requetePreparee = (PreparedStatement) connexion.prepareStatement(requete);
		
		requetePreparee.setString(1, visiteur.getMatricule());
		requetePreparee.setInt(2, annee);
		requetePreparee.setInt(3, mois);
		
		ResultSet resultat = requetePreparee.executeQuery() ;
		
		ArrayList<RapportVisite> lesRapports = new ArrayList<RapportVisite>() ;
		
		while(resultat.next()){
			
			RapportVisite unRapport = new RapportVisite() ;
			Praticien praticien = new Praticien() ;
			
			praticien.setNom(resultat.getString("PRA_NOM"));
			System.out.println(praticien.getNom());
			praticien.setNum(resultat.getInt("PRA_NUM"));
			praticien.setPrenom(resultat.getString("PRA_PRENOM"));
			praticien.setAdresse(resultat.getString("PRA_ADRESSE"));
			praticien.setCp(resultat.getString("PRA_CP"));
			praticien.setVille(resultat.getString("PRA_VILLE"));
			praticien.setNotoriete(resultat.getInt("PRA_COEFNOTORIETE"));
			praticien.setType_code(resultat.getString("TYP_CODE"));
			
			unRapport.setMatricule(resultat.getString("VIS_MATRICULE") );
			unRapport.setNum(resultat.getInt("RAP_NUM")) ;
			unRapport.setDate(resultat.getDate("RAP_DATE")) ;
			unRapport.setDateVisite(resultat.getDate("RAP_DATEVISITE"));
			unRapport.setPraticien(praticien);
			unRapport.setBilan(resultat.getString("RAP_BILAN"));
			unRapport.setMotif(resultat.getString("RAP_MOTIF"));
			unRapport.setCoefConfiance(resultat.getString("COEF_CONFIANCE"));
			unRapport.setLecture(resultat.getBoolean("RAP_LECTURE"));
			
			
			lesRapports.add( unRapport ) ;
		}
		
		requetePreparee.close() ;
		
		return lesRapports ;
	}
	
	public static ArrayList<Praticien> getPraticiensHNoto() throws Exception{
        //création d'un liste de praticiens trier pas la notoriete
        ArrayList<Praticien> lesPratN = new ArrayList<Praticien>();
       
        Connection connexion = ConnexionBD.getConnexion() ;
       
        Statement stmt = (Statement) connexion.createStatement();
   
          //requete permettant de recuperer et de trier les infos par notoriete
        String     requete  =  "SELECT P.PRA_NOM, P.PRA_VILLE , P.PRA_COEFNOTORIETE ,R.COEF_CONFIANCE ,R.RAP_DATE FROM PRATICIEN P"
                + " inner join RAPPORT_VISITE R"
                + " on P.PRA_NUM = R.PRA_NUM"
                + " order by P.PRA_COEFNOTORIETE desc ";
               
               
        PreparedStatement pstmt = (PreparedStatement)connexion.prepareStatement(requete);
       
        ResultSet resultat = pstmt.executeQuery();
        try{
            //on créer un objet de la classe Praticiens , puis on lui modifier des champs
            while(resultat.next()){
                Praticien unPraticiens = new Praticien() ;
               
                unPraticiens.setNom(resultat.getString("PRA_NOM"));
               
                unPraticiens.setVille(resultat.getString("PRA_VILLE"));
               
                unPraticiens.setNotoriete(resultat.getInt("PRA_COEFNOTORIETE"));
               
                //on créer un objet de la classe RapportVisite , puis on lui modifier des champs
                RapportVisite unRapport = new RapportVisite();
               
                unRapport.setCoefConfiance(resultat.getString("COEF_CONFIANCE"));
               
                unRapport.setDate(resultat.getDate("RAP_DATE"));
               
                //on ajout les rapports au praticiens
                unPraticiens.ajouterRapport(unRapport) ;
               
                //on ajoute l'objet unPraticiens a la liste lesPratN
                lesPratN.add(unPraticiens);
               
            }
        }
        catch(Exception e){
            JOptionPane.showMessageDialog(null, "impossible de recuperer les Praticiens");
        }
        // on ferme les variables
        finally{
            if(resultat != null){
                resultat.close();
            }
            else if(pstmt != null){
                pstmt.close();
            }
            else if(connexion != null){
                connexion.close();
            }
        }
        return lesPratN;
    }
    public static ArrayList<Praticien> getPraticiensHDate() throws Exception{
        //création d'un liste de praticiens trier pas la date
        ArrayList<Praticien> lesPratD = new ArrayList<Praticien>();
   
        Connection connexion = ConnexionBD.getConnexion() ;
   
         Statement stmt = (Statement) connexion.createStatement();

        //requete permettant de recuperer et de trier les infos par date
        String     requete  = "SELECT P.PRA_NOM, P.PRA_VILLE , P.PRA_COEFNOTORIETE ,R.COEF_CONFIANCE ,R.RAP_DATE FROM PRATICIEN P"
                + " inner join RAPPORT_VISITE R"
                + " on P.PRA_NUM = R.PRA_NUM"
                + " order by R.RAP_DATE desc";
               
        PreparedStatement pstmt = (PreparedStatement)connexion.prepareStatement(requete);
       
        ResultSet resultat = pstmt.executeQuery();
        try{
            //on créer un objet de la classe Praticiens , puis on lui modifier des champs
            while(resultat.next()){
                Praticien unPraticiens = new Praticien() ;
               
                unPraticiens.setNom(resultat.getString("PRA_NOM"));
               
                unPraticiens.setVille(resultat.getString("PRA_VILLE"));
               
                unPraticiens.setNotoriete(resultat.getInt("PRA_COEFNOTORIETE"));
               
                //on créer un objet de la classe RapportVisite , puis on lui modifier des champs
                RapportVisite unRapport = new RapportVisite();
               
                unRapport.setCoefConfiance(resultat.getString("COEF_CONFIANCE"));
               
                unRapport.setDate(resultat.getDate("RAP_DATE"));
               
                //on ajout les rapports au praticiens
                unPraticiens.ajouterRapport(unRapport) ;
                //on ajoute l'objet unPraticiens a la liste lesPratD
                lesPratD.add(unPraticiens);
               
            }
        }
        catch(Exception e){
            JOptionPane.showMessageDialog(null, "impossible de recuperer les Praticiens");
        }
        // on ferme les variables
        finally{
            if(resultat != null){
                resultat.close();
            }
            else if(pstmt != null){
                pstmt.close();
            }
            else if(connexion != null){
                connexion.close();
            }
        }
        return lesPratD;
    }
    public static ArrayList<Praticien> getPraticiensHConfiance() throws Exception{
        //création d'un liste de praticiens trier pas la confiance
        ArrayList<Praticien> lesPratC = new ArrayList<Praticien>();
   
        Connection connexion = ConnexionBD.getConnexion() ;
   
        Statement stmt = (Statement) connexion.createStatement();
       
        //requete permettant de recuperer et de trier les infos par confiance
        String     requete  = "SELECT P.PRA_NOM, P.PRA_VILLE , P.PRA_COEFNOTORIETE ,R.COEF_CONFIANCE ,R.RAP_DATE FROM PRATICIEN P"
                + " inner join RAPPORT_VISITE R"
                + " on P.PRA_NUM = R.PRA_NUM"
                + " order by P.PRA_CP ";
       
       
        PreparedStatement pstmt = (PreparedStatement)connexion.prepareStatement(requete);
       
        ResultSet resultat = pstmt.executeQuery();
        try{
            while(resultat.next()){
                //on créer un objet de la classe Praticiens , puis on lui modifier des champs
                Praticien unPraticiens = new Praticien() ;
               
                unPraticiens.setNom(resultat.getString("PRA_NOM"));
               
                unPraticiens.setVille(resultat.getString("PRA_VILLE"));
               
                unPraticiens.setNotoriete(resultat.getInt("PRA_COEFNOTORIETE"));
               
                //on créer un objet de la classe RapportVisite , puis on lui modifier des champs
                RapportVisite unRapport = new RapportVisite();
               
                unRapport.setCoefConfiance(resultat.getString("COEF_CONFIANCE"));
               
                unRapport.setDate(resultat.getDate("RAP_DATE"));
               
                //on ajout les rapports au praticiens
                unPraticiens.ajouterRapport(unRapport) ;
               
                //on ajoute l'objet unPraticiens a la liste lesPratC
                lesPratC.add(unPraticiens);
               
            }
        }
        catch(Exception e){
            JOptionPane.showMessageDialog(null, "Impossible de recuperer les Praticiens");
        }
        // on ferme les variables
        finally{
            if(resultat != null){
                resultat.close();
            }
            else if(pstmt != null){
                pstmt.close();
            }
            else if(connexion != null){
                connexion.close();
            }
        }
        return lesPratC;
    }

}
