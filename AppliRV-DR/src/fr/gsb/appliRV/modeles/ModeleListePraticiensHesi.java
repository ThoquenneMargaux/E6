package fr.gsb.appliRV.modeles;

import java.sql.Date;
import java.util.List;

import javax.swing.table.AbstractTableModel;

import fr.gsb.appliRV.entites.Praticien;
import fr.gsb.appliRV.entites.RapportVisite;

public class ModeleListePraticiensHesi extends AbstractTableModel{

	List<Praticien> infosPraticiens ;
	//Création des noms de colonne
	private String[] nomCol ={"Nom ", "Ville" , "Notoriété" , "Date" , "Confiance"};

	public ModeleListePraticiensHesi(List<Praticien> infosPraticiens) {
		super();
		this.infosPraticiens = infosPraticiens ;
	}
	
	
	
	
	@Override
	public int getRowCount() {
		// TODO Auto-generated method stub
		return infosPraticiens.size();
	}

	@Override
	public int getColumnCount() {
		// TODO Auto-generated method stub
		return nomCol.length;
	}
	public String getColumnName(int col){
		return nomCol[col];
		
	}
	
	//on affiche les infos dans le tableau 
	@Override
	public Object getValueAt(int row, int col) {
		// TODO Auto-generated method stub
		switch( col ){
			case 0 :
				return infosPraticiens.get(row).getNom() ;
			case 1 :
				return infosPraticiens.get(row).getVille() ;
			case 2 :
				return new Integer((int) infosPraticiens.get(row).getNotoriete()) ;
				
			case 3 : 
				if( infosPraticiens.get(row).getLesRapports().size() == 0 ){
					return "nc" ;
				}
				else {
					return "" + infosPraticiens.get(row).getLesRapports().get(0).getDate() ;
				}
			case 4 :
				if( infosPraticiens.get(row).getLesRapports().size() == 0 ){
//					return new Double(0.0) ;
					return "nc" ;
				}
				else {
					return infosPraticiens.get(row).getLesRapports().get(0).getCoefConfiance() ;
				}
			default :
				return null ;
		}
	}

}
