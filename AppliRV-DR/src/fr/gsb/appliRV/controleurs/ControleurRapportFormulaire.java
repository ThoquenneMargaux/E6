package fr.gsb.appliRV.controleurs;

import java.awt.Checkbox;
import java.awt.Graphics;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.sql.Date;
import java.util.ArrayList;
import java.util.List;

import javax.swing.JCheckBox;
import javax.swing.JOptionPane;

import fr.gsb.appliRV.modeles.ModeleAppliRV;
import fr.gsb.appliRV.modeles.ModeleRapports;
import fr.gsb.appliRV.rendus.RenduBoutonVoirRapport;
import fr.gsb.appliRV.rendus.RenduListeRapport;
import fr.gsb.appliRV.technique.EditeurBoutonVoir;
import fr.gsb.appliRV.technique.Session;
import fr.gsb.appliRV.vues.VueRapportFormulaire;
import fr.gsb.appliRV.entites.RapportVisite;
import fr.gsb.appliRV.entites.Visiteur;

public class ControleurRapportFormulaire implements ActionListener{
	
	private VueRapportFormulaire vue ;
	private List<RapportVisite>lesRapportVisites;
	
	public ControleurRapportFormulaire(VueRapportFormulaire vue){
		super() ;
		this.vue = vue ;
		this.enregistrerEcouteur();
	}

	private void enregistrerEcouteur() {
		// TODO Auto-generated method stub
		this.vue.getbAnnuler().addActionListener(this) ;
		this.vue.getbValider().addActionListener(this) ;		
	}

	@Override
	public void actionPerformed(ActionEvent e) {
		// TODO Auto-generated method stub
		 Object sourceEvenement = e.getSource() ;
		if(sourceEvenement == this.vue.getbAnnuler()){
			this.annuler() ;
		}else if (sourceEvenement == this.vue.getbValider()){
			this.miseAJour();
			System.out.println("ici");	
		}
		
	}
	private void miseAJour(){
		int idVisiteur = this.vue.getLstVisiteurs().getSelectedIndex() ;
		Visiteur visiteur;
		try {
			visiteur = ModeleAppliRV.getModele().getVisiteurs(Session.getSession().getLeVisiteur().getMatricule()).get(idVisiteur);
			int annee = (int) this.vue.getJcbDateVisite().getSelectedItem() ;
			int mois = (int) this.vue.getJcbDateVisiteMois().getSelectedItem() ;
			System.out.println(mois + " " + annee);
			ModeleRapports leModele = new ModeleRapports(visiteur, annee, mois) ;
			this.vue.getTabRapportVisites().setModel( leModele ) ;
			this.vue.getTabRapportVisites().getColumn("").setCellRenderer(new RenduBoutonVoirRapport());
			this.vue.getTabRapportVisites().setDefaultRenderer(String.class, new RenduListeRapport(visiteur,annee,mois));
			this.vue.getTabRapportVisites().setDefaultRenderer(Date.class, new RenduListeRapport(visiteur,annee,mois));
			this.vue.getTabRapportVisites().getColumn("").setCellEditor( new EditeurBoutonVoir(new JCheckBox(),visiteur,annee,mois));
			leModele.actualiser();
			
			for( RapportVisite unRapport : leModele.getLesrapportVisite() ){
				System.out.println( unRapport ) ;
			}
			
			
		} catch (Exception e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		
		
	}
	private void annuler(){
        // Ferme la boîte de dialogue
        this.vue.dispose() ;
    }
	

}
