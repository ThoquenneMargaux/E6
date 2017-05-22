package fr.gsb.appliRV.rendus;

import java.awt.Component;

import javax.swing.JButton;
import javax.swing.JTable;
import javax.swing.table.TableCellRenderer;

import fr.gsb.appliRV.modeles.ModeleAppliRV;

public class RenduBoutonVoirRapport extends JButton implements TableCellRenderer{
	
	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;

	@Override
	public Component getTableCellRendererComponent( JTable table, Object value,
            boolean isSelected, boolean isFocus,
            int row, int col) {
			
			if( value != null ){
				this.setText( value.toString() ) ;
			}else {
				this.setText( "" ) ;
			}
			
			return this;
	}
	
	
}