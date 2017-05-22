package fr.gsb.appliRV.modeles;

import java.sql.Date;
import java.util.ArrayList;
import java.util.List;

import javax.swing.table.AbstractTableModel;

import fr.gsb.appliRV.entites.RapportVisite;
import fr.gsb.appliRV.entites.Visiteur;
import fr.gsb.appliRV.vues.VueRapportFormulaire;

public class ModeleRapports extends AbstractTableModel {
	
	private String[] entete = {"Nom Praticien","Ville Praticien","Date de visite","Date de redaction",""};
	private List<RapportVisite> lesrapportVisite ;
	
	public ModeleRapports(Visiteur visiteur, int annee, int mois) {
		
		super();
		Visiteur unVisiteur = visiteur;
		try{
			this.lesrapportVisite = ModeleAppliRV.getModele().getRapportVisite(unVisiteur, annee, mois) ;
			for(RapportVisite unRapport : this.lesrapportVisite ){
				System.out.println( "CONSTRUCTEUR : " + unRapport ) ;
			}
		}catch(Exception e){
			e.getMessage();
		}
	}
	
	@Override
	public int getRowCount() {
		// TODO Auto-generated method stub
		return this.lesrapportVisite.size() ;
	}

	@Override
	public int getColumnCount() {
		// TODO Auto-generated method stub
		return this.entete.length ;
	}

	@Override
	public Object getValueAt(int rowIndex, int columnIndex) {
		// TODO Auto-generated method stub
		switch(columnIndex){
		case 0 :
			return this.lesrapportVisite.get(rowIndex).getPraticien().getNom();
		case 1 :
			return this.lesrapportVisite.get(rowIndex).getPraticien().getVille();
		case 2 : 
			return this.lesrapportVisite.get(rowIndex).getDateVisite();
		case 3:
			return this.lesrapportVisite.get(rowIndex).getDate();
		case 4:
			return "Voir";
		default :
			return null;
		}
	}
	
	public String getColumnName(int column){
		return this.entete[column].toString() ;
	}
	
	public Class<?> getColumnClass(int column){
		switch (column) {
			case 0 :
				return String.class ;
			case 1 :
				return String.class;
			case 2 :
				return Date.class ;
			case 3 :
				return Date.class ;
			case 4 :
				return String.class ;
			default :
				return null ;
		}
	}
	
	public void actualiser(){
		System.out.println("Fire...") ;
		this.fireTableDataChanged();
	}
	
	public List<RapportVisite> getLesrapportVisite() {
		return lesrapportVisite;
	}

	public boolean isCellEditable(int rowIndex, int columnIndex){
		if(columnIndex == 4){
			return true ;
		}else{
			return false ;
		}
	
	}

	public void setLesrapportVisite(List<RapportVisite> lesrapportVisite) {
		this.lesrapportVisite = lesrapportVisite;
	}
	

}
