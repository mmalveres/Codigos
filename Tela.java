package br.com.visao;

import br.com.controle.Dobro;
import javax.swing.JOptionPane;

public class Tela {
    public static void main(String[] args){
        int cont;
        Dobro d = new Dobro();
        
        for (cont =0; cont <3; cont ++){
        d.setValor(Double.valueOf(JOptionPane.showInputDialog("Digite o valor")));
        JOptionPane.showMessageDialog(null,"O dobro foi "+d.calcularDobro());
        
    }

    
    }
           
}
