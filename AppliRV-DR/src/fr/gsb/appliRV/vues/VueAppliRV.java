package fr.gsb.appliRV.vues;

import javax.swing.JFrame;
import javax.swing.JMenu;
import javax.swing.JMenuBar;
import javax.swing.JMenuItem;
import javax.swing.JSeparator;

import fr.gsb.appliRV.controleurs.ControleurAppliRV;

public class VueAppliRV extends JFrame{

	// Contrôleur associé à la vue
		private ControleurAppliRV controleur ;					
		
		// Les menus
		private JMenu menuFichier = new JMenu("Fichier") ;	
		private JMenu menuRecherche = new JMenu("Recherche") ;
		private JMenu menuAide = new JMenu("Aide") ;
		
		// Les items de menu
		private JMenuItem itemSeConnecter = new JMenuItem("Se connecter") ;			
		private JMenuItem itemSeDeconnecter = new JMenuItem("Se déconnecter") ;
		private JMenuItem itemQuitter = new JMenuItem("Quitter") ;
		
		private JMenuItem itemLireRapport = new JMenuItem("lire rapport visite") ;
		private JMenuItem itemListePrati = new JMenuItem("consulter liste praticiens") ;
		
		private JMenuItem itemApropos = new JMenuItem("A Propos...") ;
		
		
		public VueAppliRV(){
			super() ;
			
			// Donne un titre à la fenêtre
			this.setTitle("AppliRV") ;
			
			// Définit le largeur et la hauteur de la fenêtre
			this.setSize(600,400) ;
			
			// Positionne la fenêtre au centre de l'écran
			this.setLocationRelativeTo(null) ;
			
			// Empêche l'utilisateur de fermer la fenêtre à l'aide de la croix
			// qui se trouve en haut à droite
			this.setDefaultCloseOperation(JFrame.DO_NOTHING_ON_CLOSE) ;
			
			// Empêche le redimensionnement par l'utilisateur
			this.setResizable(false);

			// Crée la barre de menus
			this.creerBarreMenus();
			
			// Bascule la barre de menus dans le "Mode non connecte"
			this.setBarreMenusModeDeconnecte();
			
			// Crée le controleur associé et lui indique que le vue qui lui
			// est associée est elle-même
			this.controleur = new ControleurAppliRV(this) ;
			
			// Affiche la fenêtre
			this.setVisible(true) ;
		}
		
		private void creerBarreMenus(){
			
			// Crée une barre de menu vide
			JMenuBar barreMenus = new JMenuBar() ;
			
			// Ajoute les items de menu dans leur menu respectif
			this.menuFichier.add(this.itemSeConnecter) ;
			this.menuFichier.add(this.itemSeDeconnecter) ;
			this.menuFichier.add( new JSeparator() ) ;
			this.menuFichier.add(this.itemQuitter) ;
			
			//Ajoute les items de menu du menu "Rapport"
			this.menuRecherche.add(this.itemLireRapport);
			
			//Ajoute les items de menu du menu "Rapport"
			this.menuRecherche.add(this.itemListePrati);
			
			//Ajoute l'item de menu du menu "Aide
			this.menuAide.add(this.itemApropos) ;
			
			// Ajoute les menus dans la barre de menu
			barreMenus.add(menuFichier) ;
			barreMenus.add(menuRecherche) ;
			barreMenus.add(menuAide) ;
			
			// Ajoute la barre de menus à la fenêtre
			this.setJMenuBar(barreMenus) ;
		}
		
		public void setBarreMenusModeConnecte(){
			// Désactive l'item de menu "Se connecter"
			this.itemSeConnecter.setEnabled(false) ;
			
			// Active l'item de menu "Se déconnecter"
			this.itemSeDeconnecter.setEnabled(true) ;
			
			// Active le menu "Rapport"
			this.menuRecherche.setEnabled(true) ;
			
		}
		
		public void setBarreMenusModeDeconnecte(){
			
			//désactive l'item de menu "déconnecter"
			this.itemSeDeconnecter.setEnabled(false) ;
			
			// Active l'item de menu connecter"
			this.itemSeConnecter.setEnabled(true) ;
			
			//desactive l'item de menu "rapport"
			this.menuRecherche.setEnabled(false) ;
		}

		public ControleurAppliRV getControleur() {
			return controleur;
		}

		public JMenuItem getItemSeConnecter() {
			return itemSeConnecter;
		}

		public JMenuItem getItemSeDeconnecter() {
			return itemSeDeconnecter;
		}

		public JMenuItem getItemQuitter() {
			return itemQuitter;
		}

		public JMenuItem getItemLireRapport() {
			return itemLireRapport ;
		}
		
		public JMenuItem getItemListePrati() {
			return itemListePrati ;
		}
		
		public JMenuItem getItemApropos() {
			return itemApropos;
		}
		
		
	
}
