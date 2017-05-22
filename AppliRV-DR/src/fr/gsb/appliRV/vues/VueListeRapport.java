package fr.gsb.appliRV.vues;

import java.awt.Dimension;

import javax.swing.Box;
import javax.swing.JButton;
import javax.swing.JDialog;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.JScrollPane;
import javax.swing.JTable;

import fr.gsb.appliRV.entites.Praticien;

import fr.gsb.appliRV.entites.RapportVisite;

public class VueListeRapport extends JDialog{
	//Création de mon titre
		private JLabel jTitre = new JLabel("Listes des rapport") ;
		
		// Vue parente
		VueAppliRV vueParente ;
		 
		//Création du panneau 
		private JPanel panneau = new JPanel () ;

		//Création du bouton
		private JButton afficher = new JButton ("Afficher");
		
		public VueListeRapport (VueAppliRV vueParente){
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
		    	boxBouton.add( this.afficher ) ;
		    	boxBouton.add( Box.createHorizontalGlue() ) ;
		    	boxBouton.add( Box.createHorizontalStrut(300) ) ; 	
		       	
		       	
		   //Création de la box Principale et ajout des autres box 
		    Box boxPrincipale = Box.createVerticalBox() ;	
		        boxPrincipale.add( Box.createVerticalStrut(10) ) ;
		        boxPrincipale.add( boxTitre ) ;
		        boxPrincipale.add( Box.createVerticalStrut(20) ) ;	
	           
		   //Création du tableau     
//		        JTable listeP ;
//				JScrollPane panneauT ; 
//				
//				//listeP = new JTable (new RapportVisite());
//				//panneauT = new JScrollPane(listeP);
//				panneauT.setVerticalScrollBarPolicy(JScrollPane.VERTICAL_SCROLLBAR_ALWAYS);
//				panneauT.setPreferredSize(new Dimension(500,100));
		        
			//Ajout de la box principale au panneau
		        	panneau.add(boxPrincipale);
		        	//panneau.add(panneauT);
		        	panneau.add(boxBouton);
		        	
			       	
			this.setContentPane(panneau);
				
			//parametre de la boite de dialogue
			this.pack();
			this.setSize(500,250);
			this.setTitle("Consulter la liste des praticiens hésitants");
			this.setLocationRelativeTo(null);
			this.setVisible(true);
			this.setDefaultCloseOperation(JDialog.DISPOSE_ON_CLOSE);

				
		}
		
	
	
	
	
}
