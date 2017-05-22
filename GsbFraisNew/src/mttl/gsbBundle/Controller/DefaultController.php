<?php

namespace mttl\gsbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use mttl\gsbBundle\Form\Data\ConnexionClass;
use mttl\gsbBundle\Form\Type\ConnexionFormType;
use mttl\gsbBundle\Form\Data\SaisirFraisClass;
use mttl\gsbBundle\Form\Type\SaisirFraisFormType;
use mttl\gsbBundle\Form\Data\ConsulterFicheClass;
use mttl\gsbBundle\Form\Type\ConsulterFicheFormType;
use mttl\gsbBundle\Entity\Comptable;
use \mttl\gsbBundle\Entity\Visiteur;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use mttl\gsbBundle\Entity\Lignefraisforfait;
use mttl\gsbBundle\Form\LignefraisforfaitType;
use mttl\gsbBundle\Entity\Fichefrais;
use mttl\gsbBundle\Entity\Lignefraishorsforfait;
use mttl\gsbBundle\Form\LignefraishorsforfaitType;
use mttl\gsbBundle\Form\FichefraisType;
use mttl\gsbBundle\Form\Data\validerFicheClass;
use mttl\gsbBundle\Form\Type\validerFicheType;

class DefaultController extends Controller
{
    public function indexAction(
            )
    {
        return $this->render('mttlgsbBundle:Default:index.html.twig');
    }
    
    
/*---------------------------------------------------------general-----------------------------------------------------------*/
    //passage accueil.html.twi a connexion.html.twig
    public function connexionAction()
    {
 
        return $this->render('mttlgsbBundle:Default:connexion.html.twig');
    }
    
    //deconnecte un utilisateur
    public function deconnexionAction()
    {
        $this->get('session')->clear();

        return $this->render('mttlgsbBundle:Default:index.html.twig');
    }
    
    //connecte un visiteur ou un comptable
    public function formExterneAction(Request $request){
        
        $connexion =new ConnexionClass();
        $form = $this->createForm(new ConnexionFormType(), $connexion);
        
        $request = $this->container->get('request');
        $form->handleRequest($request);
        
        $session = $this->getRequest()->getSession();
        $session->start();
        
        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            switch ($connexion->getProfil()){
                case 'visiteur':
                    $repository = $em->getRepository("mttlgsbBundle:Visiteur");
                    $visiteur = $repository->findOneBy(array('login'=> $connexion->getLogin() , 'mdp'=>$connexion->getMdp()));
                    if($visiteur){
                        
                        $session->set('id', $visiteur->getIdvisiteur());
                        $session->set('nom', $visiteur->getNom());
                        $session->set('prenom', $visiteur->getPrenom());
                        $session->set('login', $visiteur->getLogin());
                        $session->set('adresse', $visiteur->getAdresse());
                        $session->set('cp', $visiteur->getCp());
                        $session->set('ville', $visiteur->getVille());
                        /*$session->set('dateEmbauche', $visiteur->getDateembauche());
                        $session->set('profil', $visiteur->getProfil());
                        $session->set('idComptable', $visiteur->getIdcomptable());*/
                        
                        
                        return $this->render('mttlgsbBundle:Default:accueilVisiteur.html.twig');
                    }
                    
                    break;
                case 'comptable':
                    $repository = $em->getRepository("mttlgsbBundle:Comptable");
                    $comptable = $repository->findOneBy(array('login'=> $connexion->getLogin() , 'mdp'=>$connexion->getMdp()));
                    if($comptable){
                        
                        
                        $session->set('idComptable', $comptable->getIdcomptable());
                        $session->set('nomComptable', $comptable->getNom());
                        $session->set('prenomComptable', $comptable->getPrenom());
                        return $this->render('mttlgsbBundle:Default:accueilComptable.html.twig');
                    }
                    break;
                default :
                    break;
             
            }
            
        }
        return $this->render('mttlgsbBundle:Default:connexion.html.twig',array('form'=>$form->createView()));
    }
/*---------------------------------------------------------visiteur-----------------------------------------------------------*/
    //passage de connexion.html.twig a accueilVisiteur.html.twig
    public function AVisiteurAction()
    {
        return $this->render('mttlgsbBundle:Default:accueilVisiteur.html.twig');
    }
    
    public function VconsulterAction()
    {

        $em = $this->getDoctrine()->getManager();
        $consulter = new ConsulterFicheClass(); 
        
        $form = $this->createForm(new ConsulterFicheFormType() , $consulter);
        $request = $this->container->get('request');
        $form->handleRequest($request);
        
        $messageE = "" ; 
        
        if($form->isValid()){
            
            $fiche = $em->getRepository('mttlgsbBundle:Fichefrais')
                    ->findOneBy(array('mois' => $consulter->getMois() ,'idvisiteur'=>$this->getRequest()->getSession()->get('id'))) ;
            
            if($fiche != null){
            $ligneFraisF = $em->getRepository('mttlgsbBundle:Lignefraisforfait')
                    ->findBy(array('idfichefrais'=> $fiche)) ;
            
            $types = $em->getRepository('mttlgsbBundle:Fraisforfait')
                    ->findAll() ;
            
            $etat = $em->getRepository('mttlgsbBundle:Etat')->findBy(array('idetat'=>$fiche));
            $horsF = $em->getRepository('mttlgsbBundle:Lignefraishorsforfait')->findBy(array('idfichefrais'=>$fiche));
            
                return $this->render('mttlgsbBundle:Default:vAfficherFrais.html.twig',array('fiche'=> $fiche , 'lignes'=> $ligneFraisF ,'types'=>$types, 'etat'=>$etat ,'hf'=>$horsF));
               
            }else {
                $messageE = "Vous avez aucune fiche correspondante a cette date ";
                
                return $this->render('mttlgsbBundle:Default:vConsulterFrais1.html.twig',array('form'=>$form->createView() , 'message' => $messageE));
                
            }
          
        }
        return $this->render('mttlgsbBundle:Default:vConsulterFrais1.html.twig',array('form'=>$form->createView(), 'message' => $messageE));
    }
    
    //Affiche la vue renseigne hors forfait 
    public function VrenseignerHFAction(){
        
        //creation de la variable danger vide si aucune erreur
        $danger = "";
        
        //connexion a doctrine
        $em = $this->getDoctrine()->getManager();
        
        //creation d'une nouvelle ligne hors forfait vide
        $LigneHF = new Lignefraishorsforfait();
        
        //Association entre la nouvelle ligne hors forfait et le formulaire de la ligne hors forfait
        $form = $this->createForm(new LignefraishorsforfaitType(), $LigneHF);
        $request = $this->container->get('request');
        $form->handleRequest($request);
        
        //recuperation du visiteur connecter
        $visiteur = $em->getRepository('mttlgsbBundle:Visiteur')
                ->findOneBy(array('idvisiteur' => $this->getRequest()->getSession()->get('id')));
        
        //recuperation de la date du jour
        $dateJour = new \DateTime();
        
        //creation de la date du mois courant
        $dateMoisCourant = new \DateTime();
        $dateMoisCourant->setDate($dateJour->format('Y'),$dateJour->format('m'), 1);
        
        //creation de la date du mois precedent
        $moisPrecedent = new \DateTime();
        $moisPrecedent->setDate($dateJour->format('Y'), $dateJour->format('m')-1, 1);
        
        //recuperation de la fiche du mois courant
        $ficheFraisTest = $em->getRepository('mttlgsbBundle:Fichefrais')
                ->findOneBy(array('idvisiteur' => $visiteur,'mois' => $dateMoisCourant));
       
       //Gestion de l'affichage des lignes hors forfait
        //test si la fiche du mois courant existe
        if($ficheFraisTest != null){
            
            //si elle existe recuperation de c'est lignes hors forfait correspondante
            $lignesHF = $em->getRepository('mttlgsbBundle:Lignefraishorsforfait')
                    ->findBy(array('idfichefrais' => $ficheFraisTest));
          
        }else{
            //sinon il pas de ligne a afficher
            $LignesHF = null;
        }
        
        //quand le formulaire est valider
        if($form->isValid()){
            //si la ligne hors ofrfait est bien du bonne années
            if($LigneHF->getDatedepense()->format('Y') == $dateMoisCourant->format('Y')){
                //si tout les champ sont remplie
                if($LigneHF->getLibelle() != null || $LigneHF->getMontant() != null){
                    //si la fiche du mois courant est bien creer
                    if($ficheFraisTest != null){
                        //definir la fiche du mois correspondante a la ligne hors forfais 
                        $LigneHF->setIdfichefrais($ficheFraisTest);


                    }else{
                        //sinon creation de la nouvelle fiche (cloture de l'anceien voir methode creerFicheFrais)
                        $ficheFrais = $this->creerFicheFrais($visiteur, $dateMoisCourant, $dateJour,$moisPrecedent);
                        //definir la fiche du mois correspondante a la ligne hors forfais 
                        $LigneHF->setIdfichefrais($ficheFrais);

                    }
                    //envoi a la base de donnée les ligne hors forfait inscrite
                    $em->persist($LigneHF);
                    $em->flush();
                    //rechargement de la vue
                    return $this->redirect($this->generateUrl('mttlgsb_VrenseignerHF'));
                }else{
                    //si les champs ne sont pas remplie retourne ce message d'erreur
                    $danger = "le nom et le montant du frais doit etre rempli!";
                }
            }else{
                //si la date n'est pas dans la bonne année retourner ce message d'erreur
                $danger ="la date doit etre dans l année courante";
            }
        }
        //chargement de la page ou rechargement de la page avec les message d'erreur
        return $this->render('mttlgsbBundle:Default:vRenseignerFraisHF.html.twig',array('form'=>$form->createView(),'lignesHF' => $ligneHF,'danger'=>$danger));
    }

    //Affiche la vue renseigne frais forfait
    public function VrenseignerAction()
    {
        $danger = "";
        $em = $this->getDoctrine()->getManager();
        $ligneFraisForfait = new Lignefraisforfait();
        $form = $this->createForm(new LignefraisforfaitType(),$ligneFraisForfait);
        $request = $this->container->get('request');
        $form->handleRequest($request);
        
        $visiteur = $em->getRepository('mttlgsbBundle:Visiteur')
                ->findOneBy(array('idvisiteur' => $this->getRequest()->getSession()->get('id')));
        
        $dateJour = new \DateTime();
        $dateMoisCourant = new \DateTime();
        $dateMoisCourant->setDate($dateJour->format('Y'), $dateJour->format('m'), 1);
        
        $moisPrecedent = new \DateTime();
        $moisPrecedent->setDate($dateJour->format('Y'), $dateJour->format('m')-1, 1);
        
        
        $ficheFraisTest = $em->getRepository('mttlgsbBundle:FicheFrais')
                ->findOneBy(array('mois' => $dateMoisCourant , 'idvisiteur' => $visiteur));
        
        if($ficheFraisTest != null){
            $lignesFraisForfait = $em->getRepository('mttlgsbBundle:Lignefraisforfait')
                    ->findBy(array('idfichefrais' => $ficheFraisTest));
            
        }else{
            $lignesFraisForfait = null;
        }
        
   
        
        if($form->isValid()){
            if($ficheFraisTest == null){
                
                $ficheFrais = $this->creerFicheFrais($visiteur, $dateMoisCourant, $dateJour,$moisPrecedent);
                $ligneFraisForfait->setIdfichefrais($ficheFrais);
                
                $em->persist($ligneFraisForfait);
                $em->flush(); 
                
                return $this->redirect($this->generateUrl('mttlgsb_Vrenseigner'));
            }else{
                
                $ligneFraisTest = $em->getRepository('mttlgsbBundle:Lignefraisforfait')
                        ->findOneBy(array('idfichefrais' => $ficheFraisTest, 'idfraisforfait' => $ligneFraisForfait->getIdfraisforfait()));
                if($ligneFraisForfait->getQuantite() != null){
                    if($ligneFraisTest != null){

                        $ligneFraisTest->setQuantite($ligneFraisForfait->getQuantite());

                        $em->persist($ligneFraisTest);
                        $em->flush();

                    }else{

                        $ligneFraisForfait->setIdfichefrais($ficheFraisTest);

                        $em->persist($ligneFraisForfait);
                        $em->flush();
                    }
                    return $this->redirect($this->generateUrl('mttlgsb_Vrenseigner'));
                }else{
                    $danger = "le champ Quantite doit etre rempli!";
                    return $this->render('mttlgsbBundle:Default:vRenseignerFrais1.html.twig',array('form'=>$form->createView(),'lignesfrais' => $lignesFraisForfait,'danger'=>$danger));
                }
                
            }
        }
        return $this->render('mttlgsbBundle:Default:vRenseignerFrais1.html.twig',array('form'=>$form->createView(),'lignesfrais' => $lignesFraisForfait,'danger'=>$danger));
    }
    
    
    //creation d'une nouvelle fiche de frais et cloture la fiche de frais du mois precedent
    public function creerFicheFrais($visiteur,$dateMoisCourrant,$dateJour,$dateMoisPrecedent){
        
        $em = $this->getDoctrine()->getManager();
        
        $ficheFrais = new Fichefrais();
        $ficheFrais->setIdvisiteur($visiteur);
        $ficheFrais->setDatemodif($dateJour);
        $ficheFrais->setMois($dateMoisCourrant);
        $etat = $em->getRepository('mttlgsbBundle:Etat')
                ->findOneBy(array('idetat'=>'CR'));
        $ficheFrais->setIdetat($etat);
        $ficheFrais->setMontantvalide(0);
        $ficheFrais->setNbjustificatifs(0);
        
        $ficheMoisPrecedent = $em->getRepository('mttlgsbBundle:FicheFrais')
                ->findOneBy(array('mois' => $dateMoisPrecedent, 'idvisiteur' => $visiteur));
        
        if($ficheMoisPrecedent != null){
            $etat = $em->getRepository('mttlgsbBundle:Etat')
                    ->findOneBy(array('idetat'=>'CL'));
            $ficheMoisPrecedent->setIdetat($etat);
        }
        
        
        $em->persist($ficheFrais);
        $em->persist($ficheMoisPrecedent);
        $em->flush();
        return $ficheFrais;
    }
    
    //supression d'une ligne de frais hors forfait
    public function supHFAction($idlignefraishorsforfait){
        $em = $this->getDoctrine()->getManager();
        $ligneFraisHorsForfait = $em->getRepository('mttlgsbBundle:Lignefraishorsforfait')
                ->findOneBy(array('idlignefraishorsforfait'=>$idlignefraishorsforfait));
        $em->remove($ligneFraisHorsForfait);
        $em->flush();
        
        return $this->redirect($this->generateUrl('mttlgsb_VrenseignerHF'));
    }
/*---------------------------------------------------------comptable----------------------------------------------------------*/
    
     //Affiche les fiche de frais qui ont un etat = VA
   public function cSuivisAction(){
       $em = $this->getDoctrine()->getManager();
      
       $visiteur = $em ->getRepository('mttlgsbBundle:Visiteur')
               ->findBy(array('idcomptable'=> $this->getRequest()->getSession()->get('idComptable')));
      
       $ficheP = $em->getRepository('mttlgsbBundle:Fichefrais')
               ->findBy(array('idvisiteur' => $visiteur , 'idetat'=> 'VA'));
       

 
       return $this->render('mttlgsbBundle:Default:cSuivisFiche.html.twig', array('fiches'=>$ficheP ));
   }
   
   //Affiche le descriptif de les fiches choisi precedemment
   public function cdescriptifAction($idfichefrais){
      
       $em = $this->getDoctrine()->getManager();
      
       $fiche = $em->getRepository('mttlgsbBundle:Fichefrais')
               ->findOneBy(array('idfichefrais'=>$idfichefrais));
      
       $ligneFraisF = $em->getRepository('mttlgsbBundle:Lignefraisforfait')
                    ->findBy(array('idfichefrais'=> $fiche)) ;
      
       $horsF = $em->getRepository('mttlgsbBundle:Lignefraishorsforfait')->findBy(array('idfichefrais'=>$fiche));
      
        $types = $em->getRepository('mttlgsbBundle:Fraisforfait')
                    ->findAll() ;
       
        return $this->render('mttlgsbBundle:Default:cDescriptifFiche.html.twig', array('fiche'=>$fiche ,'types'=>$types,'lignes'=>$ligneFraisF , 'hf'=>$horsF));
   }
  
   //Valide une fiche , met son a etat a RB et enregistre la date de modification avce la date du jour 
   public function cvaliderficheAction($idfichefrais){
       $em = $this->getDoctrine()->getManager();
      
       $fiche = $em->getRepository('mttlgsbBundle:Fichefrais')
               ->findOneBy(array('idfichefrais'=>$idfichefrais));
       
      
       $etat = $em->getRepository('mttlgsbBundle:Etat')
               ->findOneBy(array('idetat'=>'RB'));
       
      
       $fiche->setIdetat($etat) ;
       $date = new \DateTime();
       $date->setDate($date->format('Y'), $date->format('m'), $date->format('d'));
     
       
   
       $em->persist($fiche);
       $em->flush();
      
       $url = $this->generateUrl('mttlgsb_suivisPFicheFrais');
       return $this->redirect($url);
   }
    
    
    public function validerFicheFraisAction(){
        $danger="";
        $em = $this->getDoctrine()->getManager();
        $validerFiche = new validerFicheClass();
        $comptable = $em->getRepository('mttlgsbBundle:Comptable')
                    ->findOneBy(array('idcomptable' => $this->getRequest()->getSession()->get('idComptable')));
        $form = $this->createForm(new validerFicheType($comptable), $validerFiche);
        $request = $this->container->get('request');
        $form->handleRequest($request);
        
        if($form->isValid()){
            
            $ficheFrais = $em->getRepository('mttlgsbBundle:Fichefrais')
                ->findOneBy(array('mois' =>  $validerFiche->getMois(), 'idvisiteur' => $validerFiche->getVisiteurs()));
            if($ficheFrais){
               $lesForfait = $em->getRepository('mttlgsbBundle:Lignefraisforfait')
                    ->findBy(array('idfichefrais' => $ficheFrais));
            
            $lesForfaitHF = $em->getRepository('mttlgsbBundle:Lignefraishorsforfait')
                    ->findBy(array('idfichefrais' => $ficheFrais));
            
            return $this->render('mttlgsbBundle:Default:validerVisuFIche.html.twig',array('ficheFrais'=> $ficheFrais,'forfaits'=>$lesForfait ,'horsForfait' => $lesForfaitHF ));
 
            }else{
                $danger = "Pas de fiche de frais pour se mois!";
                return $this->render('mttlgsbBundle:Default:validerFicheFrais1.html.twig',array('form'=>$form->createView(),'danger'=>$danger));
            }
            
        }

        return $this->render('mttlgsbBundle:Default:validerFicheFrais1.html.twig',array('form'=>$form->createView(),'danger'=>$danger));
    }
    
    
    public function refusAction($idlignefraishorsforfait,$mois,$idVisiteur){
        $em = $this->getDoctrine()->getManager();
        $ligneFraisHorsForfait = $em->getRepository('mttlgsbBundle:Lignefraishorsforfait')
                ->findOneBy(array('idlignefraishorsforfait'=>$idlignefraishorsforfait));
        
        $ligneFraisHorsForfait->setLibelle("REFUSER : ".$ligneFraisHorsForfait->getLibelle());
        
        $moisSuivant = new \DateTime($mois);
        $moisSuivant->setDate($moisSuivant->format('Y'), ($moisSuivant->format('m')+1), 1);

        
        $ficheMoisSuivant = $em->getRepository('mttlgsbBundle:Fichefrais')
                ->findOneBy(array('mois' => $moisSuivant, 'idvisiteur' => $idVisiteur));
        
        if($ficheMoisSuivant){
            
            $ligneFraisHorsForfait->setIdfichefrais($ficheMoisSuivant);
            
        }else{
            $newFiche = creerFicheFrais2($idVisiteur,$moisSuivant);
            $ligneFraisHorsForfait->setIdfichefrais($newFiche);
        }
        
        $em->persist($ligneFraisHorsForfait);
        $em->flush();
        
        $mois2 = new \DateTime($mois);
       
        $ficheFrais = $em->getRepository('mttlgsbBundle:Fichefrais')
                ->findOneBy(array('mois' => $mois2, 'idvisiteur' => $idVisiteur));
            
        $lesForfait = $em->getRepository('mttlgsbBundle:Lignefraisforfait')
                ->findBy(array('idfichefrais' => $ficheFrais));
            
        $lesForfaitHF = $em->getRepository('mttlgsbBundle:Lignefraishorsforfait')
                ->findBy(array('idfichefrais' => $ficheFrais));

        return $this->render('mttlgsbBundle:Default:validerVisuFIche.html.twig',array('ficheFrais'=> $ficheFrais,'forfaits'=>$lesForfait ,'horsForfait' => $lesForfaitHF ));
    }
    
    public function validerAction($idFiche){
        
        $nbFrais = 0;
        
        $em = $this->getDoctrine()->getManager();
        $ficheFrais = $em->getRepository('mttlgsbBundle:Fichefrais')
                ->findOneBy(array('idfichefrais' => $idFiche));
        
        $etat = $em->getRepository('mttlgsbBundle:Etat')
                ->findOneBy(array('idetat' => 'VA'));
        
        $lesForfait = $em->getRepository('mttlgsbBundle:Lignefraisforfait')
                ->findBy(array('idfichefrais' => $ficheFrais));
            
        $lesForfaitHF = $em->getRepository('mttlgsbBundle:Lignefraishorsforfait')
                ->findBy(array('idfichefrais' => $ficheFrais));
        
        foreach($lesForfait as $unForfait){
            $nbFrais = $nbFrais + $unForfait->getQuantite();
        }
        
        $nbLignes = $nbFrais + count($lesForfaitHF);
        
                
        $dateModif = new \DateTime();
        $ficheFrais->setNbjustificatifs($nbLignes);
        $ficheFrais->setDatemodif($dateModif);
        $ficheFrais->setIdetat($etat);
        
        $em->persist($ficheFrais);
        $em->flush();
        
        return $this->redirect($this->generateUrl('mttlgsb_validerFicheFrais'));
    }
    
    public function creerFicheFrais2($visiteur,$dateMoisCourrant){
        
        $em = $this->getDoctrine()->getManager();
        
        $ficheFrais = new Fichefrais();
        $ficheFrais->setIdvisiteur($visiteur);
        $ficheFrais->setDatemodif(new \DateTime());
        $ficheFrais->setMois($dateMoisCourrant);
        $etat = $em->getRepository('mttlgsbBundle:Etat')
                ->findOneBy(array('idetat'=>'CR'));
        $ficheFrais->setIdetat($etat);
        $ficheFrais->setMontantvalide(0);
        $ficheFrais->setNbjustificatifs(0); 
        
        $em->persist($ficheFrais);
        $em->flush();
        return $ficheFrais;
    }
    
   
}

