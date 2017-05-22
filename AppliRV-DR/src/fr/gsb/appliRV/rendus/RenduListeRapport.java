package fr.gsb.appliRV.rendus;

import java.awt.Color;
import java.awt.Component;

import javax.swing.JTable;
import javax.swing.table.DefaultTableCellRenderer;
import javax.swing.table.TableCellRenderer;

import fr.gsb.appliRV.entites.Visiteur;
import fr.gsb.appliRV.modeles.ModeleAppliRV;

public class RenduListeRapport extends DefaultTableCellRenderer{
	
	private Visiteur visiteur;
	private int mois;
	private int annee;
	
	
	public RenduListeRapport(Visiteur visiteur, int annee, int mois) {
		super();
		this.visiteur = visiteur;
		this.mois = mois;
		this.annee = annee;
	}
	
	

	@Override
	public Component getTableCellRendererComponent(JTable table, Object value,
			boolean isSelected, boolean hasFocus, int row, int column) {
		// TODO Auto-generated method stub
		RenduListeRapport rendu = (RenduListeRapport) super.getTableCellRendererComponent(table, value, isSelected, hasFocus, row, column);
		
		try{
			if(ModeleAppliRV.getModele().getRapportVisite(visiteur,annee,mois).get(row).isLecture() == true){
				rendu.setBackground(new Color(0,255,0,80));
			}else {
				rendu.setBackground(new Color(255,100,100,80));
			}
		}
		catch (Exception e){
			e.printStackTrace();
		}
		return rendu;
	}

}
