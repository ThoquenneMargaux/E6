package fr.gsb.appliRV.controleurs;

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.JOptionPane;

import fr.gsb.appliRV.modeles.ModeleAppliRV;
import fr.gsb.appliRV.technique.Session;
import fr.gsb.appliRV.vues.VueAppliRV;
import fr.gsb.appliRV.vues.VueConnexion;

import fr.gsb.appliRV.vues.VuePratiHesi;
import fr.gsb.appliRV.vues.VueRapportFormulaire;


public class ControleurAppliRV implements ActionListener {
	
	// Vue associée au contrôleur
	private VueAppliRV vue ;					
		
	public ControleurAppliRV(VueAppliRV vue){
		super() ;
		// Mémorise sa vue associée
		this.vue = vue ;
			
		//Se met à l'écoute des items de menu
		this.enregistrerEcouteur();
	}
	
	private void enregistrerEcouteur(){
		// Se met à l'écoute de l'item de menu "Se connecter"
		this.vue.getItemSeConnecter().addActionListener(this) ;
		
		// Se met à l'écoute de l'item de menu "Se déconnecter"
		this.vue.getItemSeDeconnecter().addActionListener(this) ;
		
		// Se met à l'écoute de l'item de menu "Quitter"
		this.vue.getItemQuitter().addActionListener(this) ;
		
		// Se met à l'écoute de l'item de menu "Initier"
		this.vue.getItemLireRapport().addActionListener(this) ;
		
		// Se met à l'écoute de l'item de menu "Rejoindre"
		this.vue.getItemListePrati().addActionListener(this) ;
		
		// Se met à l'écoute de l'item de menu "A propos..."
		this.vue.getItemApropos().addActionListener(this) ;
	}
	
	@Override
	public void actionPerformed(ActionEvent e) {
		// Obtient le composant graphique source de l'événement ("clic")
		Object sourceEvenement = e.getSource() ;
		
		// Si la source est l'item de menu "Se déconnecter"
		if( sourceEvenement == this.vue.getItemSeDeconnecter() ){
			this.seDeconnecter();
		}
		// Si la source est l'item de menu "Quitter"
		else if( sourceEvenement == this.vue.getItemQuitter() ){
			this.quitter();
		}
		// Question 9
		else if(sourceEvenement == this.vue.getItemSeConnecter()){
			this.seConnecter();
		}
		else if(sourceEvenement == this.vue.getItemLireRapport()){
			this.LireRapport();
		}
		else if(sourceEvenement == this.vue.getItemListePrati()){
			this.ConsulterListe();
		}
		else if(sourceEvenement == this.vue.getItemApropos()){
			this.afficherApropos();
		}
	}
	
	private void seConnecter(){
		System.out.println("L'utilisateur veut se connecter.");
		// Affiche la vue dédiée à la connexion (formulaire de connexion)
		new VueConnexion(this.vue) ;
	}
	
	private void seDeconnecter(){
		System.out.println("L'utilisateur veut se déconnecter.");
		// Demande confirmation à l'utilisateur au moyen d'une boîte de dialogue
		int reponse = JOptionPane.showConfirmDialog(this.vue, "Voulez-vous vraiment vous déconnecter ?","Déconnexion",JOptionPane.YES_NO_OPTION) ;
		System.out.println("ici 1");
		// Si l'utilateur confirme...
		if( reponse == JOptionPane.YES_OPTION ){
				
			// Récupère le joueur qui a ouvert la session
			String matricule = Session.getSession().getLeVisiteur().getMatricule() ;
			
			try {
				// Déconnecte le joueur
				ModeleAppliRV.getModele().deconnecter(matricule) ;
			}
			catch(Exception e){
				JOptionPane.showMessageDialog(null, "Accès à la BD impossible.","Déconnexion",JOptionPane.ERROR_MESSAGE) ;
				
			}
			
			// Ferme cette session
			Session.fermer();
			
			// Bascule la barre de menus dans le "Mode Non connecté"
			this.vue.setBarreMenusModeDeconnecte();
			
			JOptionPane.showMessageDialog(null, "Vous êtes maintenant déconnecté.","Déconnexion",JOptionPane.INFORMATION_MESSAGE) ;
		}
	}
	
	private void quitter(){
		System.out.println("L'utilisateur veut quitter.");
		// Demande confirmation à l'utilisateur au moyen d'une boîte de dialogue
		int reponse = JOptionPane.showConfirmDialog(this.vue, "Voulez-vous vraiment quitter ?","Quitter",JOptionPane.YES_NO_OPTION) ;
		
		// Si l'utilateur confirme...
		if( reponse == JOptionPane.YES_OPTION ){
			
			// Si une session est en cours...
			if( Session.getSession() != null ){
				
				// Déconnecte le joueur
				String matricule = Session.getSession().getLeVisiteur().getMatricule() ;
				try {
					ModeleAppliRV.getModele().deconnecter(matricule) ;
				}
				catch(Exception e){
					JOptionPane.showMessageDialog(null, "Accès à la BD impossible.","Quitter",JOptionPane.ERROR_MESSAGE) ;
					
				}
				
				// Ferme cette session
				Session.fermer();
				
			}
			
			// Met fin à l'application
			System.exit(0) ;
		}
	}
	private void ConsulterListe(){
		new VuePratiHesi(this.vue);
	}
	
	private void LireRapport(){
		new VueRapportFormulaire(this.vue);
		
	}	
	
	private void afficherApropos(){
		System.out.println("L'utilisateur veut afficher la fenêtre A propos...");
		JOptionPane.showMessageDialog(this.vue, "GSB - AppliRV\n2016\nDéveloppée par Margaux Thoquenne et Tristan Lemire","A propos...",JOptionPane.INFORMATION_MESSAGE) ;
	}

}
