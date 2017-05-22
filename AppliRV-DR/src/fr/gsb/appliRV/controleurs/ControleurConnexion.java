package fr.gsb.appliRV.controleurs;

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.JOptionPane;

import fr.gsb.appliRV.vues.VueConnexion;
import fr.gsb.appliRV.entites.Visiteur;
import fr.gsb.appliRV.modeles.ModeleAppliRV;
import fr.gsb.appliRV.technique.Session;
import fr.gsb.appliRV.vues.VueAppliRV;
import fr.gsb.appliRV.vues.VueConnexion;

public class ControleurConnexion implements ActionListener {
    // Vue associée à ce contrôleur
	private VueConnexion vue ;
        
        
        
        public ControleurConnexion(VueConnexion vue){
            super() ;
            
            // Mémorise sa vue associée
            this.vue = vue ;
            
            // Se met à l'écoute des boutons
            this.enregistrerEcouteur();
        }
        
        private void enregistrerEcouteur(){
            // Question 11
            this.vue.getbConnecter().addActionListener(this) ;
            this.vue.getbAnnuler().addActionListener(this);
        }

        @Override
        public void actionPerformed(ActionEvent e) {
            Object sourceEvenement = e.getSource() ;
            
            if(sourceEvenement == this.vue.getbConnecter()){
                this.seConnecter() ;
            }
            else if (sourceEvenement == this.vue.getbAnnuler()){
                this.annuler();
            }
            
        }
        
        private void seConnecter(){
            // recuperation Matricule
            String matricule = this.vue.getTfPseudo().getText();
            String mdp = new String(this.vue.getPfMdp().getPassword());

            
             try {
                   // L'utilisateur est il déjà connecté ?
                   boolean estDejaConnecte = ModeleAppliRV.getModele().estConnecte(matricule) ;


                   // Si l'utilisateur n'est pas déjà connecté
                   if( estDejaConnecte == false ){

                    // Connecte l'utilisateur
                    boolean connexionOk = ModeleAppliRV.getModele().seConnecter(matricule,mdp) ;

                    // Si la connexion s'est déroulée avec succès
                    if( connexionOk == true ){

                     // 13.1 Crée un nouvel objet de la classe Joueur et initialise son attribut pseudo
                     
                     Visiteur visiteur1 = new Visiteur();
                     visiteur1.setMatricule(matricule) ;
                     visiteur1.setConnecte(true);

                     // 13.2 Ouvre la session
                     
                     Session.ouvrir(visiteur1);

                     
                     // 13.3 Enregistre dans la BD le fait que l'utilisateur est connecté
                     
                     ModeleAppliRV.getModele().connecter(matricule,mdp);
                  
                     
                     // 13.4 Bascule la barre de menus dans le "Mode connecté".
                     
                     this.vue.getVueParente().setBarreMenusModeConnecte();
               
                     // 13.5 Informe l'utilisateur
                     
                     JOptionPane.showMessageDialog(null, "Vous êtes maintenant connecté.","Conencté",JOptionPane.INFORMATION_MESSAGE) ;
                     //System.out.println(Session.getSession().getLeVisiteur().getMatricule());
                     // 13.6 Ferme la boîte de dialogue
                     this.annuler();
                    }
                    else {
                     // Informe l'utilisateur
                    	
                     JOptionPane.showMessageDialog(null, "Echec à la connexion.","Connexion",JOptionPane.ERROR_MESSAGE) ;
                     
                     // Réinitialise le champ de saisie du mot de passe
                     this.vue.getPfMdp().setText("") ;
                    }
                   }
                   else {
                    // Informe l'utilisateur
                    JOptionPane.showMessageDialog(null, "Le visiteur est déjà connecté.","Connexion",JOptionPane.ERROR_MESSAGE) ;
                    
                    // 13.7 Réinitialise les champs de saisie
                    // Vote code ici
                   }
                  }
                  catch(Exception e){
                   JOptionPane.showMessageDialog(null, "Accès à la BD impossible566546.","Connexion",JOptionPane.ERROR_MESSAGE) ;
                   
                  }
                  
                 }
        
        private void annuler(){
            // Ferme la boîte de dialogue
            this.vue.dispose() ;
        }
}   
