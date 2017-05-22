package fr.gsb.appliRV.controleurs;

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.util.List;

import javax.swing.JOptionPane;

import fr.gsb.appliRV.entites.Praticien;
import fr.gsb.appliRV.modeles.ModeleAppliRV;
import fr.gsb.appliRV.vues.VueConnexion;
import fr.gsb.appliRV.vues.VueListePratiHesi;
import fr.gsb.appliRV.vues.VuePratiHesi;

public class ControleurPratiHesi implements ActionListener{
	//vue associer au controleur 
    private VuePratiHesi vue ;
    
    
    public ControleurPratiHesi(VuePratiHesi vue){
        super() ;
       
        // Mémorise sa vue associée
        this.vue = vue ;
        
        // Se met à l'écoute des boutons
        this.enregistrerEcouteur();
    }
    
    private void enregistrerEcouteur(){
    	//on ecoute les boutons 
    	this.vue.confiance.addActionListener(this);
        this.vue.date.addActionListener(this);
        this.vue.noto.addActionListener(this);

        this.vue.getRetour().addActionListener(this);
    }
    
    public void actionPerformed(ActionEvent e) {
        Object sourceEvenement = e.getSource() ;
        // on teste si les boutons son appuyer , si oui on execute ce qui ya a executer
        if(sourceEvenement == this.vue.getRetour()){
    		
    		this.retour();
    	}
        else {
        	if(this.vue.confiance.isSelected() == true){
        		try {
					this.trierConfiance();
				} catch (Exception e1) {
					// TODO Auto-generated catch block
					JOptionPane.showMessageDialog(null, "impossible de recuperer les Praticiens par confiance ");
				}
				}
        	
        	else if(this.vue.date.isSelected() == true ){
        		try {
					this.trierDate();
				} 
        		catch (Exception e1) {
					JOptionPane.showMessageDialog(null, "impossible de recuperer les Praticiens par date ");
				}
        	}
        	else if(this.vue.noto.isSelected() == true){
        		try {
					this.trierNoto ();
				} 
        		catch(Exception e1){
		    		JOptionPane.showMessageDialog(null, "impossible de recuperer les Praticiens par notoriété");
		    	}
		    	
				
        	}
        	
        }
    }
    
    
    
    public void trierNoto() throws Exception{
    
    	
    	List<Praticien> lesPrat = ModeleAppliRV.getPraticiensHNoto() ;
    	
    	new VueListePratiHesi(this.vue,lesPrat) ; 
    	
    	
    }
    public void trierDate() throws Exception{
    	List<Praticien> lesPratD = ModeleAppliRV.getPraticiensHDate();
    	
    	new VueListePratiHesi(this.vue,lesPratD) ; 
    }
    public void trierConfiance() throws Exception{
    	List<Praticien> lesPratC = ModeleAppliRV.getPraticiensHConfiance();
    	
    	new VueListePratiHesi(this.vue,lesPratC) ; 
    }
    
    private void retour(){
        // Ferme la boîte de dialogue
    	
        this.vue.dispose() ;
    }
}
