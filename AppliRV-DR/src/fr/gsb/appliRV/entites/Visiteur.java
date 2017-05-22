package fr.gsb.appliRV.entites;

import java.sql.Date;

public class Visiteur {

	private String matricule ;
	private String nom ;
	private String prenom ;
	private String adresse;
	private String cp ;
	private String ville ;
	private Date dateEmbauche ;
	private String codeSecteur ;
	private String codeLaboratoire ;
	private boolean connecte ;
	
	
	public Visiteur() {
		super();
	}
	
	
	public Visiteur(String matricule, String nom, String prenom,
			String adresse, String cp, String ville, Date dateEmbauche,
			String codeSecteur, String codeLaboratoire, boolean connecte) {
		super();
		this.matricule = matricule;
		this.nom = nom;
		this.prenom = prenom;
		this.adresse = adresse;
		this.cp = cp;
		this.ville = ville;
		this.dateEmbauche = dateEmbauche;
		this.codeSecteur = codeSecteur;
		this.codeLaboratoire = codeLaboratoire;
		this.connecte = connecte;
	}


	public String getMatricule() {
		return matricule;
	}

	public void setMatricule(String matricule) {
		this.matricule = matricule;
	}

	public boolean isConnecte() {
		return connecte;
	}

	public void setConnecte(boolean connecte) {
		this.connecte = connecte;
	}
	
	

	public String getNom() {
		return nom;
	}


	public void setNom(String nom) {
		this.nom = nom;
	}


	public String getPrenom() {
		return prenom;
	}


	public void setPrenom(String prenom) {
		this.prenom = prenom;
	}


	public String getAdresse() {
		return adresse;
	}


	public void setAdresse(String adresse) {
		this.adresse = adresse;
	}


	public String getCp() {
		return cp;
	}


	public void setCp(String cp) {
		this.cp = cp;
	}


	public String getVille() {
		return ville;
	}


	public void setVille(String ville) {
		this.ville = ville;
	}


	public Date getDateEmbauche() {
		return dateEmbauche;
	}


	public void setDateEmbauche(Date dateEmbauche) {
		this.dateEmbauche = dateEmbauche;
	}


	public String getCodeSecteur() {
		return codeSecteur;
	}


	public void setCodeSecteur(String codeSecteur) {
		this.codeSecteur = codeSecteur;
	}


	public String getCodeLaboratoire() {
		return codeLaboratoire;
	}


	public void setCodeLaboratoire(String codeLaboratoire) {
		this.codeLaboratoire = codeLaboratoire;
	}


	@Override
	public String toString() {
		return matricule + " - " + nom + " - " + prenom;
	}


	
	
}
