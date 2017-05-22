package fr.gsb.appliRV.vues;

import java.awt.Container;
import java.awt.Dialog;
import java.awt.Dimension;
import java.awt.GridLayout;

import javax.swing.Box;
import javax.swing.JButton;
import javax.swing.JDialog;
import javax.swing.JLabel;
import javax.swing.JPasswordField;
import javax.swing.JTextField;

import fr.gsb.appliRV.controleurs.ControleurConnexion;
import fr.gsb.appliRV.controleurs.ControleurAppliRV;

public class VueConnexion extends JDialog {

	// Vue parente
	VueAppliRV vueParente ;
	
	// Contrôleur associé à la vue
	ControleurConnexion controleur ;
	
	// Equittes
	JLabel lbMatricule = new JLabel("Matricule :") ;
	JLabel lbMdp = new JLabel("Mot de passe :") ;
	
	// Champ de saisie du pseudo
	JTextField tfMatricule = new JTextField() ;
	
	// Champ de saisie du mot de passe
	JPasswordField pfMdp = new JPasswordField() ;
	
	// Boutons
	JButton bConnecter = new JButton("Se connecter") ;
	JButton bAnnuler = new JButton("Annuler") ;
	
	public VueConnexion(VueAppliRV vueParente){
		// Appel du constructeur de la super-classe
		//	Troisième argument : true pour indiquer que la boîte de dialogue est modale 
		super(vueParente,"Connexion",true) ;
		
		// Mémorise la vue parente qui est la fenêtre principale de l'application
		this.vueParente = vueParente ;
		
		// Crée le formulaire de saisie
		this.creerInterface() ;
		
		// Redimensionne la boîte de dialogue (dimensions adaptées aux composants qui s'y trouvent)
		this.pack() ;
		
		this.setLocationRelativeTo(null);
		this.setResizable(false);
		//this.setModal(true);
		this.controleur = new ControleurConnexion(this);
		this.setVisible(true);
	}

	private void creerInterface(){
		
		// Crée un gestionnaire d'espace (gestionnaire d'agencement)
		GridLayout agenceur = new GridLayout(3,2) ;
		
		// Définit l'espace entre les composants
		agenceur.setHgap(5) ;
		agenceur.setVgap(5) ;
		
		// Spécifie le gestionnaire d'espace à utiliser pour cette vue  
		this.setLayout( agenceur ) ;
		
		// Récupère le panneau de la vue
		Container panneau = this.getContentPane() ;
		
		// Positionne ls composants sur le panneau
		panneau.add(this.lbMatricule) ;
		panneau.add(this.tfMatricule) ;
				
		panneau.add(this.lbMdp) ;
		panneau.add(this.pfMdp) ;
				
		panneau.add(this.bConnecter) ;
		panneau.add(this.bAnnuler) ;
		
	}

	public ControleurConnexion getControleur() {
		return controleur;
	}

	public JLabel getLbPseudo() {
		return lbMatricule;
	}

	public JLabel getLbMdp() {
		return lbMdp;
	}

	public JTextField getTfPseudo() {
		return tfMatricule;
	}

	public JPasswordField getPfMdp() {
		return pfMdp;
	}

	public JButton getbConnecter() {
		return bConnecter;
	}

	public JButton getbAnnuler() {
		return bAnnuler;
	}

	public VueAppliRV getVueParente() {
		return vueParente;
	}
	
}
