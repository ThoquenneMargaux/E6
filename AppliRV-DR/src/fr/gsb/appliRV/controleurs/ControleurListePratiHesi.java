package fr.gsb.appliRV.controleurs;

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import fr.gsb.appliRV.vues.VueListePratiHesi;



public class ControleurListePratiHesi implements ActionListener{
	//vue associer au controleur 
    private VueListePratiHesi vue ;
    
    
    public ControleurListePratiHesi(VueListePratiHesi vue){
        super() ;
       
        // Mémorise sa vue associée
        this.vue = vue ;
     // Se met à l'écoute des boutons
        this.enregistrerEcouteur();
        
    }
    private void enregistrerEcouteur(){
    	//on ecouter les boutons
        this.vue.getOk().addActionListener(this);
    }
    
    
	@Override
	public void actionPerformed(ActionEvent e) {
		// TODO Auto-generated method stub
		  Object sourceEvenement = e.getSource() ;
		  
		  // on teste si les boutons son appuyer , si oui on execute ce qui ya a executer
		 if( sourceEvenement == this.vue.getOk()){
			 this.ok();
		 }
      		
      	
	}


	private void ok() {
		// TODO Auto-generated method stub
		
		this.vue.dispose() ;
	}
    
    
    
}
