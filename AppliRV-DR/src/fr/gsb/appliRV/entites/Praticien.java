package fr.gsb.appliRV.entites;

import java.util.ArrayList;
import java.util.List;

public class Praticien {
	
	private  int num;
	private String nom ;
	private String prenom ;
	private String adresse;
	private String cp ;
	private String ville ;
	private int notoriete;
	private String type_code;
	
	private List<RapportVisite> lesRapports = new ArrayList<RapportVisite>();
	
	public Praticien() {
		super();
	}


	public Praticien(int num, String nom, String prenom, String adresse,
			String cp, String ville, int notoriete, String type_code) {
		super();
		this.num = num;
		this.nom = nom;
		this.prenom = prenom;
		this.adresse = adresse;
		this.cp = cp;
		this.ville = ville;
		this.notoriete = notoriete;
		this.type_code = type_code;
	}


	public int getNum() {
		return num;
	}


	public void setNum(int num) {
		this.num = num;
	}


	public String getNom() {
		return nom;
	}


	public void setNom(String nom) {
		this.nom = nom;
	}


	public String getPrenom() {
		return prenom;
	}


	public void setPrenom(String prenom) {
		this.prenom = prenom;
	}


	public String getAdresse() {
		return adresse;
	}


	public void setAdresse(String adresse) {
		this.adresse = adresse;
	}


	public String getCp() {
		return cp;
	}


	public void setCp(String cp) {
		this.cp = cp;
	}


	public String getVille() {
		return ville;
	}


	public void setVille(String ville) {
		this.ville = ville;
	}


	public float getNotoriete() {
		return notoriete;
	}


	public void setNotoriete(int notoriete) {
		this.notoriete = notoriete;
	}


	public String getType_code() {
		return type_code;
	}


	public void setType_code(String type_code) {
		this.type_code = type_code;
	}
	
	public List<RapportVisite> getLesRapports() {
		return lesRapports;
	}


	public void setLesRapports(List<RapportVisite> lesRapports) {
		this.lesRapports = lesRapports;
	}


	public void ajouterRapport( RapportVisite unRapport ){
		this.lesRapports.add(unRapport);
	}

}
