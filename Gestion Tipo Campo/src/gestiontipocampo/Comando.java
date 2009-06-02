/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package gestiontipocampo;

/**
 *
 * @author Alberto
 */
public class Comando {
    protected String nombreComando; //El nombre del comando
    protected int tipoComando;      //El tipo (creacion, con mascara, etc)
    protected String descripcion;   //La descripcion
    protected boolean facilDificil; //Aqui diferenciamos si es con mascara o es de los faciles

    //ESTA ES LA OPCIÓN DE COMANDOS DE CREAR, BORRAR O MODIFICAR
    protected String formDestino;   //El formulario que voy a crear/borrar/modificar (si es el caso)

    //ESTA ES LA OPCIÓN DE COMANDO CON MÁSCARA
    protected String tipoCampoInicial;
    protected String condicionInicial;
    protected String tipoCampoFinal;
    protected String condicionFinal;

    public Comando() {
        this.nombreComando = "";
        this.tipoComando = 0;
        this.descripcion = "";
        this.formDestino = "";
        this.tipoCampoInicial = "";
        this.condicionInicial = "";
        this.tipoCampoFinal = "";
        this.condicionFinal = "";
    }

    public void setNombre(String name){
        this.nombreComando = name;
    }

    public void setTipoComando(int tipo){
        this.tipoComando = tipo;
    }

    public void setDescripcion(String desc){
        this.descripcion = desc;
    }

    public void setFormularioDestino(String dest){
        this.formDestino = dest;
    }

    public void setTipoCampoInicial(String inicial){
        this.tipoCampoInicial = inicial;
    }

    public void setCondicionInicial(String inicio){
        this.condicionInicial = inicio;
    }

    public void setTipoCampoFinal(String fin){
        this.tipoCampoFinal = fin;
    }

    public void setCondicionFinal(String end){
        this.condicionFinal = end;
    }

    public String getNombre(){
        return(this.nombreComando);
    }
    
    public int getTipoComando(){
        return(this.tipoComando);
    }

    public String getDescripcion(){
        return(this.descripcion);
    }

    public String getFormularioDestino(){
        return(this.formDestino);
    }

    public String getTipoCampoInicial(){
        return(this.tipoCampoInicial);
    }

    public String getCondicionInicial(){
        return(this.condicionInicial);
    }

    public String getTipoCampoFinal(){
        return(this.tipoCampoFinal);
    }

    public String getCondicionFinal(){
        return(this.condicionFinal);
    }
}
