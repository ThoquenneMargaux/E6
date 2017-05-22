package fr.gsb.appliRV;

import fr.gsb.appliRV.entites.RapportVisite;
import fr.gsb.appliRV.entites.Visiteur;
import fr.gsb.appliRV.modeles.ModeleAppliRV;
import fr.gsb.appliRV.vues.VueAppliRV;
import fr.gsb.appliRV.vues.VueConnexion;
import fr.gsb.appliRV.vues.VueRapportFormulaire;



public class AppliRv {
	
	public static void main(String[] args) throws Exception {
		
		new VueAppliRV();
		Visiteur visiteur = new Visiteur () ;
		visiteur.setMatricule("a17") ;
		
		ModeleAppliRV.getModele().getRapportVisite(visiteur,2014,1);
		
		for(RapportVisite unRapport : ModeleAppliRV.getRapportVisite(visiteur,2014,1)){
			System.out.println(unRapport.toString()) ;
			
		}
		
	}
}
