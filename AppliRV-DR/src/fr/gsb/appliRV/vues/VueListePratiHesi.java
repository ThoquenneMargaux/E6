package fr.gsb.appliRV.vues;

import java.awt.Dimension;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.util.List;

import javax.swing.Box;
import javax.swing.JButton;
import javax.swing.JDialog;
import javax.swing.JLabel;
import javax.swing.JList;
import javax.swing.JPanel;
import javax.swing.JScrollPane;
import javax.swing.JTable;

import fr.gsb.appliRV.controleurs.ControleurListePratiHesi;
import fr.gsb.appliRV.controleurs.ControleurPratiHesi;
import fr.gsb.appliRV.entites.Praticien;
import fr.gsb.appliRV.entites.Praticien;
import fr.gsb.appliRV.modeles.ModeleListePraticiensHesi;

public class VueListePratiHesi extends JDialog {
	
	//Création de mon titre
	private JLabel jTitre = new JLabel("Listes des praticiens") ;
	
	// Vue parente
	VuePratiHesi vueParente ;
	
	

	// Contrôleur associé à la vue
    ControleurListePratiHesi controleur ;
    
	//Création du panneau 
	private JPanel panneau = new JPanel () ;

	//Création du bouton
	private JButton ok = new JButton ("OK");
	
	public VueListePratiHesi (VuePratiHesi vueParente, List<Praticien> listePraticiensHesitants){
	
		super() ;
		
		
		//Création de la box titre 
		Box boxTitre = Box.createHorizontalBox() ;
	       	boxTitre.add( Box.createHorizontalStrut(80) ) ;
	       	boxTitre.add( Box.createHorizontalGlue() ) ;
	       	boxTitre.add( this.jTitre ) ;
	       	boxTitre.add( Box.createHorizontalGlue() ) ;
	       	boxTitre.add( Box.createHorizontalStrut(90) ) ;
	       	
	    
	    //Création box Bouton
	    Box boxBouton = Box.createHorizontalBox() ;
	    	boxBouton.add( Box.createHorizontalStrut(300) ) ;
	    	boxBouton.add( Box.createHorizontalGlue() ) ;
	    	boxBouton.add( this.ok ) ;
	    	boxBouton.add( Box.createHorizontalGlue() ) ;
	    	boxBouton.add( Box.createHorizontalStrut(300) ) ; 	
	       	
	       	
	   //Création de la box Principale et ajout des autres box 
	    Box boxPrincipale = Box.createVerticalBox() ;	
	        boxPrincipale.add( Box.createVerticalStrut(10) ) ;
	        boxPrincipale.add( boxTitre ) ;
	        boxPrincipale.add( Box.createVerticalStrut(20) ) ;	
           
	   //Création du tableau     
	        JTable listeP ;
			JScrollPane panneauT ;
			
			ModeleListePraticiensHesi modeleTab = new ModeleListePraticiensHesi( listePraticiensHesitants ) ;
			listeP = new JTable (modeleTab);
			
			panneauT = new JScrollPane(listeP);
			panneauT.setVerticalScrollBarPolicy(JScrollPane.VERTICAL_SCROLLBAR_ALWAYS);
			panneauT.setPreferredSize(new Dimension(550,100));
	        
		//Ajout de la box principale au panneau
	        	panneau.add(boxPrincipale);
	        	panneau.add(panneauT);
	        	panneau.add(boxBouton);
	        	
	        	
		this.setContentPane(panneau);
			
		//parametre de la boite de dialogue
		this.controleur = new ControleurListePratiHesi(this);
		this.pack();
		this.setSize(550,250);
		this.setTitle("Consulter la liste des praticiens hésitants");
		this.setLocationRelativeTo(null);
		this.setVisible(true);
		this.setDefaultCloseOperation(JDialog.DISPOSE_ON_CLOSE);

			
	}

	public JLabel getjTitre() {
		return jTitre;
	}

	public void setjTitre(JLabel jTitre) {
		this.jTitre = jTitre;
	}

	public VuePratiHesi getVueParente() {
		return vueParente;
	}

	public void setVueParente(VuePratiHesi vueParente) {
		this.vueParente = vueParente;
	}

	public ControleurListePratiHesi getControleur() {
		return controleur;
	}

	public void setControleur(ControleurListePratiHesi controleur) {
		this.controleur = controleur;
	}

	public JPanel getPanneau() {
		return panneau;
	}

	public void setPanneau(JPanel panneau) {
		this.panneau = panneau;
	}

	public JButton getOk() {
		return ok;
	}

	public void setOk(JButton ok) {
		this.ok = ok;
	}
	
}
