package fr.gsb.appliRV.controleurs;

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.JOptionPane;
import javax.swing.JTable;

import fr.gsb.appliRV.entites.Visiteur;
import fr.gsb.appliRV.vues.VueRapportFormulaire;
import fr.gsb.appliRV.vues.VueVoirRapport;

public class ControleurBoutonVoir implements ActionListener {
	
	private int row ;
	private int column ;
	private JTable table ;
	
	private Visiteur visiteur;
	private int annee;
	private int mois;
	
	public ControleurBoutonVoir(Visiteur visiteur, int annee, int mois) {
		super();
		this.visiteur = visiteur;
		this.annee = annee;
		this.mois = mois;
	}
	
	@Override
	public void actionPerformed(ActionEvent arg0) {
		// TODO Auto-generated method stub
		new VueVoirRapport(this.row,visiteur,annee,mois) ;
		
	}
	

	public int getRow() {
		return row;
	}


	public void setRow(int row) {
		this.row = row;
	}


	public int getColumn() {
		return column;
	}


	public void setColumn(int column) {
		this.column = column;
	}


	public JTable getTable() {
		return table;
	}


	public void setTable(JTable table) {
		this.table = table;
	}
}
