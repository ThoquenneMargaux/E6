package fr.gsb.appliRV.vues;

import java.awt.Container;
import java.awt.Dimension;
import java.util.ArrayList;
import java.util.List;

import javax.swing.Box;
import javax.swing.ButtonGroup;
import javax.swing.JButton;
import javax.swing.JCheckBox;
import javax.swing.JComboBox;
import javax.swing.JDialog;
import javax.swing.JLabel;
import javax.swing.JList;
import javax.swing.JRadioButton;
import javax.swing.JScrollPane;
import javax.swing.JSeparator;
import javax.swing.JTable;
import javax.swing.ListSelectionModel;

import fr.gsb.appliRV.rendus.RenduBoutonVoirRapport;
import fr.gsb.appliRV.technique.EditeurBoutonVoir;
import fr.gsb.appliRV.technique.Session;
import fr.gsb.appliRV.controleurs.ControleurRapportFormulaire;
import fr.gsb.appliRV.entites.RapportVisite;
import fr.gsb.appliRV.entites.Visiteur;
import fr.gsb.appliRV.modeles.ModeleAppliRV;
import fr.gsb.appliRV.modeles.ModeleRapports;



public class VueRapportFormulaire extends JDialog{
	
	// Vue parente
	private VueAppliRV vueParente ;
			
	private List<Visiteur> lesVisiteurs;
	private List<RapportVisite> lesRapportVisite ;
	
	// Etiquettes
	private JLabel lbTitre = new JLabel("Choix du Rapport") ;
	private JLabel lbMatricule = new JLabel("Matricule du Visiteur : ") ;
	private JLabel lbDateVisite = new JLabel("Date de la visite : ") ;
	private JLabel lbAnnee = new JLabel("Année") ;
	private JLabel lbMois = new JLabel("Mois") ;
	private JLabel lbRecherche = new JLabel("Liste des Rapport de Visite") ; 
			
	// Boutons
	private JButton bValider = new JButton("Valider") ;
	private JButton bAnnuler = new JButton("Annuler") ;
	
	// List
	
	private JList<Visiteur> lstVisiteurs;
	private JScrollPane spVisiteurs ;
	
	private Integer[] annee = {2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017};
	private JComboBox jcbDateVisite = new JComboBox(annee) ;
	
	private Integer[] mois = {1,2,3,4,5,6,7,8,9,10,11,12} ;
	private JComboBox jcbDateVisiteMois = new JComboBox(mois);
	
	private JTable tabRapportVisites ;
	private JScrollPane spRapportVisites ; 
	
	private ControleurRapportFormulaire controleur;
	private ModeleRapports modeleRapports;
			
	public VueRapportFormulaire(VueAppliRV vueParente){
			
		// Appel du constructeur de la super-classe
		//	Troisième argument : true pour indiquer que la boîte de dialogue est modale 
		super(vueParente,"Consulter le Rapport",true) ;
		
		// Mémorise la vue parente qui est la fenêtre principale de l'application
		this.vueParente = vueParente ;
			
		// Crée le formulaire de saisie
		this.creerInterface() ;
			
		// Redimensionne la boîte de dialogue (dimensions adaptées aux composants qui s'y trouvent)
		this.pack() ;
			
		// Positionne la boîte de dialogue au centre de l'écran
		this.setLocationRelativeTo(null) ;
			
		// Empêche le redimensionnement par l'utilisateur
		this.setResizable(false);
			
		// Crée le controleur associé et lui indique que le vue qui lui
		// est associée est elle-même
		this.controleur = new ControleurRapportFormulaire(this) ;
			
		// Affiche la boîte de dialogue
		this.setVisible(true) ;
		
	}
	
	public ModeleRapports getModeleRapports() {
		return modeleRapports;
	}

	public void setModeleRapports(ModeleRapports modeleRapports) {
		this.modeleRapports = modeleRapports;
	}

	private void creerInterface(){
		
		try {
			lesVisiteurs = ModeleAppliRV.getModele().getVisiteurs(Session.getSession().getLeVisiteur().getMatricule());
			
		} catch (Exception e) {
			// TODO Auto-generated catch block
			lesVisiteurs = new ArrayList<Visiteur>();
			System.out.println("Erreur :" + e.getMessage() ) ;
			e.printStackTrace();
		}
		
		lstVisiteurs = new JList(lesVisiteurs.toArray()) ;
		spVisiteurs = new JScrollPane(lstVisiteurs) ;
		lstVisiteurs.setSelectionMode(ListSelectionModel.SINGLE_SELECTION) ;
		
		tabRapportVisites = new JTable() ;
		tabRapportVisites.setRowHeight(10) ;
		
		
		//tabRapportVisites.getColumn("").setCellRenderer(new RenduBoutonVoirRapport());
		//tabRapportVisites.getColumn("").setCellEditor( new EditeurBoutonVoir(new JCheckBox()));
		
		spRapportVisites = new JScrollPane(tabRapportVisites) ;
		spRapportVisites.setSize(500, 200) ;
		
		// Récupère le panneau de la vue
		Container panneau = this.getContentPane() ;
		
		// Crée la boîte dédiée au titre
		Box boxTitre = Box.createHorizontalBox() ;
		boxTitre.add( Box.createHorizontalStrut(10) ) ;
		boxTitre.add( Box.createHorizontalGlue() ) ;
		boxTitre.add( this.lbTitre ) ;
		boxTitre.add( Box.createHorizontalGlue() ) ;
		boxTitre.add( Box.createHorizontalStrut(10) ) ;
		
		// Crée la boîte dédiée à l'étiquette du choix de la couleur
		Box boxEtiquetteMatricule = Box.createHorizontalBox() ;
		boxEtiquetteMatricule.add( Box.createHorizontalStrut(10) ) ;
		boxEtiquetteMatricule.add( this.lbMatricule ) ;
		boxEtiquetteMatricule.add( Box.createHorizontalGlue() ) ;
		
		// Crée de la boîte dédiée au choix de la couleur
		// à l'aide de boutons radios
		Box boxChoixMatricule = Box.createHorizontalBox();
		boxChoixMatricule.add(Box.createHorizontalStrut(50));
		boxChoixMatricule.add( this.spVisiteurs) ;
		boxChoixMatricule.add(Box.createHorizontalStrut(50));
		boxChoixMatricule.add(Box.createHorizontalGlue());
		
		// Crée la boîte dédiée à l'étiquette du choix de la couleur
		Box boxEtiquetteDateVisite = Box.createHorizontalBox() ;
		boxEtiquetteDateVisite.add( Box.createHorizontalStrut(10) ) ;
		boxEtiquetteDateVisite.add( this.lbDateVisite ) ;
		boxEtiquetteDateVisite.add( Box.createHorizontalGlue() ) ;
		
		// Crée de la boîte dédiée au choix de la couleur
		// à l'aide de boutons radios
		Box boxChoixDateVisite = Box.createHorizontalBox();
		boxChoixDateVisite.add(Box.createHorizontalStrut(50));
		boxChoixDateVisite.add( this.lbAnnee) ;
		boxChoixDateVisite.add(Box.createHorizontalStrut(5));
		boxChoixDateVisite.add( this.jcbDateVisite) ;
		boxChoixDateVisite.add(Box.createHorizontalGlue());
		
		Box boxChoixDateVisiteMois = Box.createHorizontalBox();
		boxChoixDateVisiteMois.add(Box.createHorizontalStrut(50));
		boxChoixDateVisiteMois.add( this.lbMois) ;
		boxChoixDateVisiteMois.add(Box.createHorizontalStrut(18));
		boxChoixDateVisiteMois.add( this.jcbDateVisiteMois) ;
		boxChoixDateVisiteMois.add(Box.createHorizontalGlue());
				
				
		
		// Crée de la boîte dédiée aux boutons "Créer" et "Annuler"
		Box boxBoutons = Box.createHorizontalBox();
		boxBoutons.add(Box.createHorizontalStrut(5));
		boxBoutons.add(Box.createHorizontalGlue());
		boxBoutons.add(this.bValider);
		boxBoutons.add(Box.createHorizontalStrut(20));
		boxBoutons.add(this.bAnnuler);
		boxBoutons.add(Box.createHorizontalGlue());
		boxBoutons.add(Box.createHorizontalStrut(5));
		
		Box boxChoixRapport = Box.createHorizontalBox();
		boxChoixRapport.add(Box.createHorizontalStrut(50));
		boxChoixRapport.add( this.spRapportVisites) ;
		boxChoixRapport.add(Box.createHorizontalStrut(50));
		boxChoixRapport.add(Box.createHorizontalGlue());
		
		// Crée la boîte principale et y insère les boîtes horizontales
		Box boxPrincipale = Box.createVerticalBox() ;
		boxPrincipale.add( Box.createVerticalStrut(10) ) ;
		boxPrincipale.add( boxTitre ) ;
		boxPrincipale.add( Box.createVerticalStrut(10) ) ;
		boxPrincipale.add( new JSeparator() ) ;
		boxPrincipale.add( Box.createVerticalStrut(10) ) ;
		boxPrincipale.add( boxEtiquetteMatricule) ;
		boxPrincipale.add( Box.createVerticalStrut(10) ) ;
		
		boxPrincipale.add(boxChoixMatricule);
		boxPrincipale.add( Box.createVerticalStrut(10) ) ;
		boxPrincipale.add(Box.createHorizontalStrut(10));
		boxPrincipale.add(boxEtiquetteDateVisite);
		boxPrincipale.add( Box.createVerticalStrut(10) ) ;
		boxPrincipale.add(boxChoixDateVisite);
		boxPrincipale.add(Box.createHorizontalStrut(10));
		boxPrincipale.add(Box.createVerticalStrut(10));
		boxPrincipale.add(boxChoixDateVisiteMois) ;
		boxPrincipale.add(Box.createVerticalStrut(10));
		boxPrincipale.add(boxBoutons);
		boxPrincipale.add(Box.createHorizontalStrut(10));
		boxPrincipale.add(Box.createVerticalStrut(10));
		boxPrincipale.add(boxChoixRapport);
		boxPrincipale.add(Box.createHorizontalStrut(10));
		
		// Insère la boîte principale dans le panneau de la fenêtre
		panneau.add( boxPrincipale ) ;
		
		// Récupère les dimensions du bouton "Annuler"...
		Dimension dimensionsBouton = this.bAnnuler.getPreferredSize() ;
		
		// ... et les applique au bouton "Creer" pour qu'ils aient tous les deux
		// la même taille
		this.bValider.setPreferredSize(dimensionsBouton);

	}

	public VueAppliRV getVueParente() {
		return vueParente;
	}

	public void setVueParente(VueAppliRV vueParente) {
		this.vueParente = vueParente;
	}

	public List<Visiteur> getLesVisiteurs() {
		return lesVisiteurs;
	}

	public void setLesVisiteurs(List<Visiteur> lesVisiteurs) {
		this.lesVisiteurs = lesVisiteurs;
	}

	public List<RapportVisite> getLesRapportVisite() {
		return lesRapportVisite;
	}

	public void setLesRapportVisite(List<RapportVisite> lesRapportVisite) {
		this.lesRapportVisite = lesRapportVisite;
	}

	public JLabel getLbTitre() {
		return lbTitre;
	}

	public void setLbTitre(JLabel lbTitre) {
		this.lbTitre = lbTitre;
	}

	public JLabel getLbMatricule() {
		return lbMatricule;
	}

	public void setLbMatricule(JLabel lbMatricule) {
		this.lbMatricule = lbMatricule;
	}

	public JLabel getLbDateVisite() {
		return lbDateVisite;
	}

	public void setLbDateVisite(JLabel lbDateVisite) {
		this.lbDateVisite = lbDateVisite;
	}

	public JLabel getLbAnnee() {
		return lbAnnee;
	}

	public void setLbAnnee(JLabel lbAnnee) {
		this.lbAnnee = lbAnnee;
	}

	public JLabel getLbMois() {
		return lbMois;
	}

	public void setLbMois(JLabel lbMois) {
		this.lbMois = lbMois;
	}

	public JLabel getLbRecherche() {
		return lbRecherche;
	}

	public void setLbRecherche(JLabel lbRecherche) {
		this.lbRecherche = lbRecherche;
	}

	public JButton getbValider() {
		return bValider;
	}

	public void setbValider(JButton bValider) {
		this.bValider = bValider;
	}

	public JButton getbAnnuler() {
		return bAnnuler;
	}

	public void setbAnnuler(JButton bAnnuler) {
		this.bAnnuler = bAnnuler;
	}

	public JList<Visiteur> getLstVisiteurs() {
		return lstVisiteurs;
	}

	public void setLstVisiteurs(JList<Visiteur> lstVisiteurs) {
		this.lstVisiteurs = lstVisiteurs;
	}

	public JScrollPane getSpVisiteurs() {
		return spVisiteurs;
	}

	public void setSpVisiteurs(JScrollPane spVisiteurs) {
		this.spVisiteurs = spVisiteurs;
	}

	public Integer[] getAnnee() {
		return annee;
	}

	public void setAnnee(Integer[] annee) {
		this.annee = annee;
	}

	public JComboBox getJcbDateVisite() {
		return jcbDateVisite;
	}

	public void setJcbDateVisite(JComboBox jcbDateVisite) {
		this.jcbDateVisite = jcbDateVisite;
	}

	public Integer[] getMois() {
		return mois;
	}

	public void setMois(Integer[] mois) {
		this.mois = mois;
	}

	public JComboBox getJcbDateVisiteMois() {
		return jcbDateVisiteMois;
	}

	public void setJcbDateVisiteMois(JComboBox jcbDateVisiteMois) {
		this.jcbDateVisiteMois = jcbDateVisiteMois;
	}

	public JTable getTabRapportVisites() {
		return tabRapportVisites;
	}

	public void setTabRapportVisites(JTable tabRapportVisites) {
		this.tabRapportVisites = tabRapportVisites;
	}

	public JScrollPane getSpRapportVisites() {
		return spRapportVisites;
	}

	public void setSpRapportVisites(JScrollPane spRapportVisites) {
		this.spRapportVisites = spRapportVisites;
	}

	public ControleurRapportFormulaire getControleur() {
		return controleur;
	}

	public void setControleur(ControleurRapportFormulaire controleur) {
		this.controleur = controleur;
	}
	
	/*public VueAppliVR getVueParente() {
		return vueParente;
	}

	public ControleurInitierPartie getControleur() {
		return controleur;
	}*/
	
	

	

}
