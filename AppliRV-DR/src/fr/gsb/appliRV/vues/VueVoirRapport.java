package fr.gsb.appliRV.vues;

import java.awt.Dimension;
import java.util.ArrayList;

import javax.swing.Box;
import javax.swing.JDialog;
import javax.swing.JLabel;
import javax.swing.JTable;
import javax.swing.JTextArea;

import fr.gsb.appliRV.controleurs.ControleurVoirRapport;
import fr.gsb.appliRV.entites.RapportVisite;
import fr.gsb.appliRV.entites.Visiteur;
import fr.gsb.appliRV.modeles.ModeleAppliRV;
import fr.gsb.appliRV.modeles.ModeleRapports;
import fr.gsb.appliRV.technique.ConnexionException;


public class VueVoirRapport extends JDialog{
	
	private Visiteur visiteur;
	private int annee;
	private int mois;
	private int ligne;
	private RapportVisite rapport = new RapportVisite();

	public VueVoirRapport(int numLigne, Visiteur visiteur, int annee, int mois) {
		super() ;
		this.ligne = numLigne;
		this.visiteur = visiteur;
		this.annee = annee;
		this.mois = mois;
		
		this.setTitle("Rapport de visite") ;
		this.creerInterface() ;
		this.setLocationRelativeTo(null) ;
		this.setDefaultCloseOperation(DISPOSE_ON_CLOSE) ;
		this.setSize(1300,500) ; 
		this.setVisible(true );
	}

	private void creerInterface() {
		// TODO Auto-generated method stub
		try{
			rapport = ModeleAppliRV.getModele().getRapportVisite(visiteur, annee, mois).get(ligne);
		}catch(Exception e){
			e.getMessage();
		}
		JTextArea texte = new JTextArea(rapport.toString());
		/*try {
			ModeleAppliRV.getModele().LireRapport(rapport.getNumeroRapport());
		} catch (ConnexionException e){
			e.printStackTrace();
		}*/
		texte.setEditable(false);
		this.add(texte);
	}


	public int getLigne() {
		return ligne;
	}
	
}

