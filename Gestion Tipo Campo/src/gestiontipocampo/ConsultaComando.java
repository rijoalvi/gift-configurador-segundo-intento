/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package gestiontipocampo;

/**
 *
 * @author luiscarlosch
 */
public class ConsultaComando extends ControladorBD{
    public void agregarComandoSinMascara(int CorrelativoFOrmulario, String NombreComando, String DescripcionComando, int tipoComando, int correlativoFormularioATrabajar, String fechaActualizacion){
       // this.doUpdate("Insert Into FORMULARIO (nombre, descripcion) VALUES ('" + 45 + "', '" + 45 + "')");
        this.doUpdate("iNSERT INTO Comando (IDFormulario,Nombre,Descripcion,Tipo,IDFormularioATrabajar,FechaActualizacion) VALUES ("  +CorrelativoFOrmulario+", '"+NombreComando+"','"+DescripcionComando+"',"+tipoComando+", "+correlativoFormularioATrabajar+",'"+fechaActualizacion+"')");
    }
    public void agregarComandoConMascara(int IDComando, String TipoCampoInicial,String CondicionInicial,String TipoCampoFinal,String EstadoFinal){
        //INSERT INTO ComandoMascara (IDComando,TipoCampoInicial,CondicionInicial,TipoCampoFinal,EstadoFinal) VALUES (1,'tipoCampoInicial','condicion inicial','campoFinal','dsfa');
        this.doUpdate("INSERT INTO ComandoMascara (IDComando,TipoCampoInicial,CondicionInicial,TipoCampoFinal,EstadoFinal) VALUES ("+IDComando+",'"+TipoCampoInicial+"','"+CondicionInicial+"','"+TipoCampoFinal+"','"+EstadoFinal+"');");
    }
}
