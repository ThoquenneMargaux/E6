package fr.gsb.appliRV.vues;

import java.awt.BorderLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.Box;
import javax.swing.ButtonGroup;
import javax.swing.JButton;
import javax.swing.JDialog;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.JRadioButton;

import fr.gsb.appliRV.controleurs.ControleurConnexion;
import fr.gsb.appliRV.controleurs.ControleurPratiHesi;

public class VuePratiHesi extends JDialog {
    
    //Création de mon titre
    private JLabel jTitre = new JLabel("Choix des critéres de selection d'un praticiens") ;
    // Vue parente
    VueAppliRV vueParente ;
    
    // Contrôleur associé à la vue
    ControleurPratiHesi controleur ;
           
    //Création des bouton radio et bouton     
    public JRadioButton confiance = new JRadioButton("Confiance  " );
    public JRadioButton date = new JRadioButton("Date  ");
    public JRadioButton noto = new JRadioButton ("Notoriété  ");
    
   
    public JButton retour = new JButton("Retour ");
    
    
	public VuePratiHesi (VueAppliRV vueParente){
        super() ;
        
        // Création d'un groupe de bouton radio et ajout des boutons radio dedans 
        ButtonGroup bgCriteres = new ButtonGroup();
        bgCriteres.add( confiance ) ;
        bgCriteres.add( date ) ;
        bgCriteres.add( noto ) ;
        
        JPanel panneau = new JPanel();
        
        
        //Création de la box titre
        Box boxTitre = Box.createHorizontalBox() ;
            boxTitre.add( Box.createHorizontalStrut(10) ) ;
            boxTitre.add( Box.createHorizontalGlue() ) ;
            boxTitre.add( this.jTitre ) ;
            boxTitre.add( Box.createHorizontalGlue() ) ;
            boxTitre.add( Box.createHorizontalStrut(10) ) ;

        //Création de la box des radio
        Box boxRadio = Box.createVerticalBox() ;
            boxRadio.add( Box.createHorizontalStrut(5) ) ;
            boxRadio.add( Box.createHorizontalGlue() ) ;
            boxRadio.add( this.confiance ) ;
            boxRadio.add( Box.createHorizontalStrut(20) ) ;
            boxRadio.add( this.date);
            boxRadio.add( Box.createHorizontalStrut(20) ) ;
            boxRadio.add( this.noto);
            boxRadio.add( Box.createHorizontalGlue() ) ;
            boxRadio.add( Box.createHorizontalStrut(5) ) ;
            
        //Création de la box des bouton
        Box boxBouton = Box.createHorizontalBox() ;
            boxBouton.add( Box.createHorizontalStrut(5) ) ;

            boxBouton.add( Box.createHorizontalStrut(20) ) ;
            boxBouton.add(this.retour);
            boxBouton.add(Box.createHorizontalGlue());
            boxBouton.add( Box.createHorizontalStrut(5) ) ;
            
        //Création de la box Principale et ajout des autres box
        Box boxPrincipale = Box.createVerticalBox() ;    
            boxPrincipale.add( Box.createVerticalStrut(10) ) ;
            boxPrincipale.add( boxTitre ) ;
            boxPrincipale.add( Box.createVerticalStrut(10) ) ;
            boxPrincipale.add( boxRadio ) ;
            boxPrincipale.add( Box.createVerticalStrut(10) ) ;
            boxPrincipale.add( boxBouton ) ;
            boxPrincipale.add( Box.createVerticalStrut(10) ) ;
          
        
        
        //Ajout de la box principale au panneau
        panneau.add(boxPrincipale);
            
        this.setContentPane(panneau);
        
        
        

        
        //parametre de la boite de dialogue
        this.controleur = new ControleurPratiHesi(this);
        this.pack();
        this.setSize(500,200);
        this.setTitle("Consulter la liste des praticiens hésitants");
        this.setLocationRelativeTo(null);
        this.setVisible(true);
        this.setDefaultCloseOperation(JDialog.DISPOSE_ON_CLOSE);
    }
	
	
	public JRadioButton getConfiance() {
		return confiance;
	}



	public void setConfiance(JRadioButton confiance) {
		this.confiance = confiance;
	}



	public JRadioButton getDate() {
		return date;
	}



	public void setDate(JRadioButton date) {
		this.date = date;
	}



	public JRadioButton getNoto() {
		return noto;
	}



	public void setNoto(JRadioButton noto) {
		this.noto = noto;
	}



	


	public JButton getRetour() {
		return retour;
	}



	public void setRetour(JButton retour) {
		this.retour = retour;
	}



   

    
}