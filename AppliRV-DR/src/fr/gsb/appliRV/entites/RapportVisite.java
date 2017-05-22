package fr.gsb.appliRV.entites;

import java.sql.Date;

public class RapportVisite {

	private String matricule;
	private int num;
	private Date date;
	private Date dateVisite;
	private Praticien praticien;
	private String bilan;
	private String motif;
	private String coefConfiance;
	private boolean lecture;
	
	public RapportVisite(String matricule, int num, Date date, Date dateVisite,
			Praticien praticien, String bilan, String motif, String coefConfiance,
			boolean lecture) {
		super();
		this.matricule = matricule;
		this.num = num;
		this.date = date;
		this.dateVisite = dateVisite;
		this.praticien = praticien ;
		this.bilan = bilan;
		this.motif = motif;
		this.coefConfiance = coefConfiance;
		this.lecture = lecture;
	}
	
	public RapportVisite() {
		super();
	}

	public String getMatricule() {
		return matricule;
	}

	public void setMatricule(String matricule) {
		this.matricule = matricule;
	}

	public int getNum() {
		return num;
	}

	public void setNum(int num) {
		this.num = num;
	}

	public Date getDate() {
		return date;
	}

	public void setDate(Date date) {
		this.date = date;
	}

	public Date getDateVisite() {
		return dateVisite;
	}

	public void setDateVisite(Date dateVisite) {
		this.dateVisite = dateVisite;
	}

	

	public Praticien getPraticien() {
		return praticien;
	}

	public void setPraticien(Praticien praticien) {
		this.praticien = praticien;
	}

	public String getBilan() {
		return bilan;
	}

	public void setBilan(String bilan) {
		this.bilan = bilan;
	}

	public String getMotif() {
		return motif;
	}

	public void setMotif(String motif) {
		this.motif = motif;
	}

	public String getCoefConfiance() {
		return coefConfiance;
	}

	public void setCoefConfiance(String coefConfiance) {
		this.coefConfiance = coefConfiance;
	}

	public boolean isLecture() {
		return lecture;
	}

	public void setLecture(boolean lecture) {
		this.lecture = lecture;
	}

	@Override
	public String toString() {
		return "Rapport de visite n°" + num + "\n" + "Régidigé par le visiteur : " + matricule
			     + "\nLe " + date + "\n\nPraticien : " + praticien.getNum() + " Date de visite : " + dateVisite
			     + "\nMotif : " + motif + " Coéfficient de confiance : " + coefConfiance
			     + "\n\nBilan : \n" + bilan ;
	}
	
	
	
	
	
	
}
