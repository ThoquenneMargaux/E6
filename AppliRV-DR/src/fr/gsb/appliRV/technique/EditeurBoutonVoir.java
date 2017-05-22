package fr.gsb.appliRV.technique;

import java.awt.Component;

import javax.swing.DefaultCellEditor;
import javax.swing.JButton;
import javax.swing.JCheckBox;
import javax.swing.JTable;

import fr.gsb.appliRV.controleurs.ControleurBoutonVoir;
import fr.gsb.appliRV.entites.Visiteur;
import fr.gsb.appliRV.vues.VueVoirRapport;


public class EditeurBoutonVoir extends DefaultCellEditor{
	
	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	
	protected JButton bouton = new JButton() ;
	private ControleurBoutonVoir controleur;

	
	public EditeurBoutonVoir(JCheckBox arg0,Visiteur visiteur, int annee, int mois) {
		super(arg0);
		// TODO Auto-generated constructor stub
		controleur = new ControleurBoutonVoir(visiteur, annee, mois);
		this.bouton.setOpaque(true) ;
		this.bouton.addActionListener( controleur );
	}


	@Override
	public Component getTableCellEditorComponent(JTable table, Object value, boolean isSelected, int row, int column) {
		// TODO Auto-generated method stub
		controleur.setTable(table) ;
		controleur.setRow(row) ;
		controleur.setColumn(column);
		
		if(value == null){
			this.bouton.setText("") ;
		}
		else {
			this.bouton.setText(value.toString()) ;
		}
		return this.bouton ;
	}
	
	
}