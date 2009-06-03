/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * frameComandos.java
 *
 * Created on 24/05/2009, 10:19:33 PM
 */

package gestiontipocampo;

import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.Vector;
import javax.swing.DefaultComboBoxModel;
import java.util.*;

/**
 *
 * @author Ricardo
 */
public class frameComandos extends javax.swing.JFrame {

    /** Creates new form frameComandos */
    Comando comandoActual;

    /******esta es para saber cual es el correlativo del i-esimo elemento del comboBox******/
    Vector correlativo;


    /*Constructro con el que inicia todo en blanco*/
    public frameComandos() {
        initComponents();
        ControladorBD miPrueba = new ControladorBD();
        comandoActual = new Comando(); // Clase comando con la que trabajara la interfaz!
        correlativo = new Vector();

        javax.swing.DefaultComboBoxModel modelo = new javax.swing.DefaultComboBoxModel( );
        modelo = (DefaultComboBoxModel) comboSeleccionFormulario.getModel();

        paneComandosFaciles.setVisible(true);
        

        //HAGAN DOCUMENTACION PARA NO TENER QUE BATIAR Q PUTAS HACE CADA COSA Q AGREGAN! - ALBERTO
        try {
            ResultSet resultado = miPrueba.getResultSet("select correlativo, nombre from FORMULARIO;");

            while (resultado.next()) {
                modelo.addElement(resultado.getObject(2).toString());
                correlativo.add(resultado.getObject(1));
            }

        } catch (SQLException e) {
            System.out.println("*SQL Exception: *" + e.toString());
        }

        comboSeleccionFormulario.setModel(modelo);
        comboSeleccionFormulario.setVisible(true);

        mainPane.setVisible(true);
        paneComandoMascara.setVisible(false);
        paneComandosFaciles.setVisible(true);
        /*comboSeleccionFormulario.setModel(new javax.swing.DefaultComboBoxModel(new String[] { " " }));*/
    }

    /*Constructor que recive el correlativo del formulario con el que iniciara*/
    public frameComandos(Formulario datosForm, int correlativoFormulario) {
        initComponents();
        ControladorBD miPrueba = new ControladorBD();
        comandoActual = new Comando(); // Clase comando con la que trabajara la interfaz!
        correlativo = new Vector();
        IDForm = correlativoFormulario;
        datosFormulario = datosForm;
        javax.swing.DefaultComboBoxModel modelo = new javax.swing.DefaultComboBoxModel( );
        modelo = (DefaultComboBoxModel) comboSeleccionFormulario.getModel();

        paneComandosFaciles.setVisible(true);

        //HAGAN DOCUMENTACION PARA NO TENER QUE BATIAR Q PUTAS HACE CADA COSA Q AGREGAN! - ALBERTO
        int posicion = 0;
        try {
            ResultSet resultado = miPrueba.getResultSet("select correlativo, nombre from FORMULARIO;");
            int i=0;
            while (resultado.next()) {
                i++;                
                modelo.addElement(resultado.getObject(2).toString());
                correlativo.add(resultado.getObject(1));
                 if(Integer.parseInt(resultado.getObject(1).toString()) == correlativoFormulario){
                    posicion = i;
                }
            }

        } catch (SQLException e) {
            System.out.println("*SQL Exception: *" + e.toString());
        }
        comboSeleccionFormulario.setModel(modelo);
        comboSeleccionFormulario.setVisible(true);
        comboSeleccionFormulario.setSelectedIndex(posicion);
        mainPane.setVisible(true);
        paneComandoMascara.setVisible(false);
        paneComandosFaciles.setVisible(true);

        llenarComboComponentes();
        /*comboSeleccionFormulario.setModel(new javax.swing.DefaultComboBoxModel(new String[] { " " }));*/
    }
    /** This method is called from within the constructor to
     * initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is
     * always regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        labelNombre = new javax.swing.JLabel();
        fieldNombre = new javax.swing.JTextField();
        labelTipo = new javax.swing.JLabel();
        comboTipo = new javax.swing.JComboBox();
        labelDescripcion = new javax.swing.JLabel();
        fieldDescripcion = new javax.swing.JTextField();
        mainPane = new javax.swing.JLayeredPane();
        paneComandoMascara = new javax.swing.JLayeredPane();
        paneDivisionAccion = new javax.swing.JLayeredPane();
        paneAccionCombo = new javax.swing.JLayeredPane();
        comboAccion = new javax.swing.JComboBox();
        paneAccionField = new javax.swing.JLayeredPane();
        fieldAccion = new javax.swing.JTextField();
        labelCampoInicial = new javax.swing.JLabel();
        labelCondicionInicial = new javax.swing.JLabel();
        comboCampoInicial = new javax.swing.JComboBox();
        labelCondAccion = new javax.swing.JLabel();
        paneDivisionEfecto = new javax.swing.JLayeredPane();
        paneEfectoCombo = new javax.swing.JLayeredPane();
        comboEfecto = new javax.swing.JComboBox();
        paneEfectoField = new javax.swing.JLayeredPane();
        fieldEfecto = new javax.swing.JTextField();
        labelCampoFinal = new javax.swing.JLabel();
        labelCondicionInicial1 = new javax.swing.JLabel();
        comboCampoFinal = new javax.swing.JComboBox();
        labelCondFinal = new javax.swing.JLabel();
        botonAgregarAccion = new javax.swing.JButton();
        paneComandosFaciles = new javax.swing.JLayeredPane();
        labelSeleccionFormulario = new javax.swing.JLabel();
        comboSeleccionFormulario = new javax.swing.JComboBox();
        botonCancelar = new javax.swing.JButton();
        botonAceptar = new javax.swing.JButton();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setName("Form"); // NOI18N

        labelNombre.setLabelFor(fieldNombre);
        org.jdesktop.application.ResourceMap resourceMap = org.jdesktop.application.Application.getInstance(gestiontipocampo.GestionTipoCampoApp.class).getContext().getResourceMap(frameComandos.class);
        labelNombre.setText(resourceMap.getString("labelNombre.text")); // NOI18N
        labelNombre.setName("labelNombre"); // NOI18N

        fieldNombre.setText(resourceMap.getString("fieldNombre.text")); // NOI18N
        fieldNombre.setName("fieldNombre"); // NOI18N

        labelTipo.setLabelFor(comboTipo);
        labelTipo.setText(resourceMap.getString("labelTipo.text")); // NOI18N
        labelTipo.setName("labelTipo"); // NOI18N

        comboTipo.setModel(new javax.swing.DefaultComboBoxModel(new String[] { "Crear", "Eliminar", "Modificar", "Comando con Máscara" }));
        comboTipo.setName("comboTipo"); // NOI18N
        comboTipo.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                comboTipoActionPerformed(evt);
            }
        });

        labelDescripcion.setLabelFor(fieldDescripcion);
        labelDescripcion.setText(resourceMap.getString("labelDescripcion.text")); // NOI18N
        labelDescripcion.setName("labelDescripcion"); // NOI18N

        fieldDescripcion.setText(resourceMap.getString("fieldDescripcion.text")); // NOI18N
        fieldDescripcion.setName("fieldDescripcion"); // NOI18N

        mainPane.setName("mainPane"); // NOI18N

        paneComandoMascara.setName("paneComandoMascara"); // NOI18N

        paneDivisionAccion.setName("paneDivisionAccion"); // NOI18N

        paneAccionCombo.setName("paneAccionCombo"); // NOI18N

        comboAccion.setModel(new javax.swing.DefaultComboBoxModel(new String[] { "Item 1", "Item 2", "Item 3", "Item 4" }));
        comboAccion.setName("comboAccion"); // NOI18N
        comboAccion.setBounds(0, 0, 150, -1);
        paneAccionCombo.add(comboAccion, javax.swing.JLayeredPane.DEFAULT_LAYER);

        paneAccionCombo.setBounds(0, 0, 150, 50);
        paneDivisionAccion.add(paneAccionCombo, javax.swing.JLayeredPane.DEFAULT_LAYER);

        paneAccionField.setName("paneAccionField"); // NOI18N

        fieldAccion.setText(resourceMap.getString("fieldAccion.text")); // NOI18N
        fieldAccion.setName("fieldAccion"); // NOI18N
        fieldAccion.setBounds(0, 0, 150, -1);
        paneAccionField.add(fieldAccion, javax.swing.JLayeredPane.DEFAULT_LAYER);

        paneAccionField.setBounds(0, 0, 160, 50);
        paneDivisionAccion.add(paneAccionField, javax.swing.JLayeredPane.DEFAULT_LAYER);

        paneDivisionAccion.setBounds(170, 50, 170, 50);
        paneComandoMascara.add(paneDivisionAccion, javax.swing.JLayeredPane.DEFAULT_LAYER);

        labelCampoInicial.setLabelFor(comboCampoInicial);
        labelCampoInicial.setText(resourceMap.getString("labelCampoInicial.text")); // NOI18N
        labelCampoInicial.setName("labelCampoInicial"); // NOI18N
        labelCampoInicial.setBounds(10, 30, 100, 14);
        paneComandoMascara.add(labelCampoInicial, javax.swing.JLayeredPane.DEFAULT_LAYER);

        labelCondicionInicial.setText(resourceMap.getString("labelCondicionInicial.text")); // NOI18N
        labelCondicionInicial.setName("labelCondicionInicial"); // NOI18N
        labelCondicionInicial.setBounds(70, 10, 80, 14);
        paneComandoMascara.add(labelCondicionInicial, javax.swing.JLayeredPane.DEFAULT_LAYER);

        comboCampoInicial.setName("comboCampoInicial"); // NOI18N
        comboCampoInicial.setBounds(10, 50, 130, 20);
        paneComandoMascara.add(comboCampoInicial, javax.swing.JLayeredPane.DEFAULT_LAYER);

        labelCondAccion.setLabelFor(paneDivisionAccion);
        labelCondAccion.setText(resourceMap.getString("labelCondAccion.text")); // NOI18N
        labelCondAccion.setName("labelCondAccion"); // NOI18N
        labelCondAccion.setBounds(170, 30, 100, 14);
        paneComandoMascara.add(labelCondAccion, javax.swing.JLayeredPane.DEFAULT_LAYER);

        paneDivisionEfecto.setName("paneDivisionEfecto"); // NOI18N

        paneEfectoCombo.setName("paneEfectoCombo"); // NOI18N

        comboEfecto.setModel(new javax.swing.DefaultComboBoxModel(new String[] { "Item 1", "Item 2", "Item 3", "Item 4" }));
        comboEfecto.setName("comboEfecto"); // NOI18N
        comboEfecto.setBounds(0, 0, 150, -1);
        paneEfectoCombo.add(comboEfecto, javax.swing.JLayeredPane.DEFAULT_LAYER);

        paneEfectoCombo.setBounds(0, 0, 150, 50);
        paneDivisionEfecto.add(paneEfectoCombo, javax.swing.JLayeredPane.DEFAULT_LAYER);

        paneEfectoField.setName("paneEfectoField"); // NOI18N

        fieldEfecto.setName("fieldEfecto"); // NOI18N
        fieldEfecto.setBounds(0, 0, 150, -1);
        paneEfectoField.add(fieldEfecto, javax.swing.JLayeredPane.DEFAULT_LAYER);

        paneEfectoField.setBounds(0, 0, 160, 50);
        paneDivisionEfecto.add(paneEfectoField, javax.swing.JLayeredPane.DEFAULT_LAYER);

        paneDivisionEfecto.setBounds(490, 50, 170, 50);
        paneComandoMascara.add(paneDivisionEfecto, javax.swing.JLayeredPane.DEFAULT_LAYER);

        labelCampoFinal.setLabelFor(comboCampoInicial);
        labelCampoFinal.setText(resourceMap.getString("labelCampoFinal.text")); // NOI18N
        labelCampoFinal.setName("labelCampoFinal"); // NOI18N
        labelCampoFinal.setBounds(330, 30, 100, 14);
        paneComandoMascara.add(labelCampoFinal, javax.swing.JLayeredPane.DEFAULT_LAYER);

        labelCondicionInicial1.setText(resourceMap.getString("labelCondicionInicial1.text")); // NOI18N
        labelCondicionInicial1.setName("labelCondicionInicial1"); // NOI18N
        labelCondicionInicial1.setBounds(390, 10, 80, 14);
        paneComandoMascara.add(labelCondicionInicial1, javax.swing.JLayeredPane.DEFAULT_LAYER);

        comboCampoFinal.setName("comboCampoFinal"); // NOI18N
        comboCampoFinal.setBounds(330, 50, 130, 20);
        paneComandoMascara.add(comboCampoFinal, javax.swing.JLayeredPane.DEFAULT_LAYER);

        labelCondFinal.setLabelFor(paneDivisionAccion);
        labelCondFinal.setText(resourceMap.getString("labelCondFinal.text")); // NOI18N
        labelCondFinal.setName("labelCondFinal"); // NOI18N
        labelCondFinal.setBounds(490, 30, 100, 14);
        paneComandoMascara.add(labelCondFinal, javax.swing.JLayeredPane.DEFAULT_LAYER);

        botonAgregarAccion.setText(resourceMap.getString("botonAgregarAccion.text")); // NOI18N
        botonAgregarAccion.setName("botonAgregarAccion"); // NOI18N
        botonAgregarAccion.setBounds(560, 200, 110, 23);
        paneComandoMascara.add(botonAgregarAccion, javax.swing.JLayeredPane.DEFAULT_LAYER);

        paneComandoMascara.setBounds(10, 20, 680, 240);
        mainPane.add(paneComandoMascara, javax.swing.JLayeredPane.DEFAULT_LAYER);

        paneComandosFaciles.setName("paneComandosFaciles"); // NOI18N

        labelSeleccionFormulario.setLabelFor(comboSeleccionFormulario);
        labelSeleccionFormulario.setText(resourceMap.getString("labelSeleccionFormulario.text")); // NOI18N
        labelSeleccionFormulario.setName("labelSeleccionFormulario"); // NOI18N
        labelSeleccionFormulario.setBounds(10, 10, 180, 14);
        paneComandosFaciles.add(labelSeleccionFormulario, javax.swing.JLayeredPane.DEFAULT_LAYER);

        comboSeleccionFormulario.setModel(new javax.swing.DefaultComboBoxModel(new String[] { " " }));
        comboSeleccionFormulario.setName("comboSeleccionFormulario"); // NOI18N
        comboSeleccionFormulario.setBounds(10, 30, 180, 20);
        paneComandosFaciles.add(comboSeleccionFormulario, javax.swing.JLayeredPane.DEFAULT_LAYER);

        paneComandosFaciles.setBounds(20, 30, 680, 220);
        mainPane.add(paneComandosFaciles, javax.swing.JLayeredPane.DEFAULT_LAYER);

        botonCancelar.setText(resourceMap.getString("botonCancelar.text")); // NOI18N
        botonCancelar.setName("botonCancelar"); // NOI18N
        botonCancelar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                botonCancelarActionPerformed(evt);
            }
        });

        botonAceptar.setText(resourceMap.getString("botonAceptar.text")); // NOI18N
        botonAceptar.setName("botonAceptar"); // NOI18N
        botonAceptar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                botonAceptarActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(layout.createSequentialGroup()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(mainPane, javax.swing.GroupLayout.DEFAULT_SIZE, 721, Short.MAX_VALUE)
                            .addGroup(layout.createSequentialGroup()
                                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                    .addComponent(labelNombre)
                                    .addComponent(fieldNombre, javax.swing.GroupLayout.PREFERRED_SIZE, 179, javax.swing.GroupLayout.PREFERRED_SIZE))
                                .addGap(45, 45, 45)
                                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                    .addComponent(labelTipo)
                                    .addComponent(comboTipo, javax.swing.GroupLayout.PREFERRED_SIZE, 145, javax.swing.GroupLayout.PREFERRED_SIZE))
                                .addGap(57, 57, 57)
                                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                    .addComponent(labelDescripcion)
                                    .addComponent(fieldDescripcion, javax.swing.GroupLayout.PREFERRED_SIZE, 205, javax.swing.GroupLayout.PREFERRED_SIZE))))
                        .addContainerGap())
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                        .addComponent(botonAceptar, javax.swing.GroupLayout.PREFERRED_SIZE, 109, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(botonCancelar, javax.swing.GroupLayout.PREFERRED_SIZE, 109, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addGap(48, 48, 48))))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(labelNombre)
                    .addGroup(layout.createSequentialGroup()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(labelTipo)
                            .addComponent(labelDescripcion))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(fieldDescripcion, javax.swing.GroupLayout.PREFERRED_SIZE, 54, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(comboTipo, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(fieldNombre, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(mainPane, javax.swing.GroupLayout.PREFERRED_SIZE, 267, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(18, 18, 18)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(botonCancelar)
                    .addComponent(botonAceptar))
                .addContainerGap(15, Short.MAX_VALUE))
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void llenarComboComponentes(){
        SortedSet miembros = datosFormulario.getMiembroFormularioSet();
        String[] valores = new String[miembros.size()];
        Iterator iterador = miembros.iterator();
        int k = 0;
        //Busco todos los nombres de los componentes del formulario
        for (int i = 0; i < miembros.size(); i++) {
            MiembroFormulario miembro = (MiembroFormulario) iterador.next();
            String nombre = miembro.getNombre();
            int IDTipoCampo = miembro.getIDTipoCampo();
            //Mientras no sea una etiqueta
            if (IDTipoCampo != 0) {
                valores[k] = nombre;
                ++k;
            }
        }

        //crea un modelo para el combo
        DefaultComboBoxModel modelo = new DefaultComboBoxModel();
        modelo.removeAllElements();
        for(int i = 0; i < valores.length; ++i){
            modelo.addElement(valores[i]);
        }
        //ambos tienen el mismo modelo
        comboCampoInicial.setModel(modelo);
        comboCampoFinal.setModel(modelo);

    }

    private void botonAceptarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_botonAceptarActionPerformed
        
        String nombreFormulario = this.comboSeleccionFormulario.getSelectedItem().toString();        
        //Se inicializan los campos del Comando
        comandoActual.setIDFormulario(IDForm);
        comandoActual.setIDFormularioTrabajar( getIDFormulario( nombreFormulario) );
        comandoActual.setDescripcion(this.fieldDescripcion.getText());
        comandoActual.setNombre(this.fieldNombre.getText());
        comandoActual.setTipoComando(this.comboTipo.getSelectedIndex()+1);

        //Comandos con máscara
        if( comandoActual.getTipoComando() == 4){
            //ComandoMascara (IDComando,TipoCampoInicial,CondicionInicial,TipoCampoFinal,EstadoFinal)
            comandoActual.setTipoCampoInicial( comboCampoInicial.getSelectedItem().toString() );
            comandoActual.setCondicionInicial( comboAccion.getSelectedItem().toString() );
            comandoActual.setTipoCampoFinal( comboCampoFinal.getSelectedItem().toString() );
            comandoActual.setCondicionFinal( comboEfecto.getSelectedItem().toString() );
            comandoActual.guardarComando();
        }
        //comandos "faciles"
        else{
            //(int CorrelativoFOrmulario, String NombreComando, String DescripcionComando, int tipoComando, int correlativoFormularioATrabajar, String fechaActualizacion){
            comandoActual.guardarComando();
        }
        this.dispose();
    }//GEN-LAST:event_botonAceptarActionPerformed

    private int getIDFormulario( String nombreForm){
        int ID = -1;
        ControladorBD contr = new ControladorBD();
        try {
            ResultSet resultado = contr.getResultSet("select correlativo from FORMULARIO where nombre = '"+nombreForm+"' ;");
            resultado.next();
            ID = Integer.parseInt(resultado.getObject("correlativo").toString());
        } catch (SQLException e) {
            System.out.println("*SQL Exception: *" + e.toString());
        }
        return ID;
    }

    private void comboTipoActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_comboTipoActionPerformed
        this.mainPane.setVisible(true);
        if(comboTipo.getSelectedIndex()!=3){
            this.paneComandoMascara.setVisible(false);
            this.paneComandosFaciles.setVisible(true);
        }else{
            this.paneComandoMascara.setVisible(true);
            this.paneComandosFaciles.setVisible(false);
            //temporal!!!
            this.botonAgregarAccion.setVisible(false);
        }
    }//GEN-LAST:event_comboTipoActionPerformed

    private void botonCancelarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_botonCancelarActionPerformed
        this.dispose();
    }//GEN-LAST:event_botonCancelarActionPerformed

    /**
    * @param args the command line arguments
    */
    public static void main(String args[]) {
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new frameComandos().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton botonAceptar;
    private javax.swing.JButton botonAgregarAccion;
    private javax.swing.JButton botonCancelar;
    private javax.swing.JComboBox comboAccion;
    private javax.swing.JComboBox comboCampoFinal;
    private javax.swing.JComboBox comboCampoInicial;
    private javax.swing.JComboBox comboEfecto;
    private javax.swing.JComboBox comboSeleccionFormulario;
    private javax.swing.JComboBox comboTipo;
    private javax.swing.JTextField fieldAccion;
    private javax.swing.JTextField fieldDescripcion;
    private javax.swing.JTextField fieldEfecto;
    private javax.swing.JTextField fieldNombre;
    private javax.swing.JLabel labelCampoFinal;
    private javax.swing.JLabel labelCampoInicial;
    private javax.swing.JLabel labelCondAccion;
    private javax.swing.JLabel labelCondFinal;
    private javax.swing.JLabel labelCondicionInicial;
    private javax.swing.JLabel labelCondicionInicial1;
    private javax.swing.JLabel labelDescripcion;
    private javax.swing.JLabel labelNombre;
    private javax.swing.JLabel labelSeleccionFormulario;
    private javax.swing.JLabel labelTipo;
    private javax.swing.JLayeredPane mainPane;
    private javax.swing.JLayeredPane paneAccionCombo;
    private javax.swing.JLayeredPane paneAccionField;
    private javax.swing.JLayeredPane paneComandoMascara;
    private javax.swing.JLayeredPane paneComandosFaciles;
    private javax.swing.JLayeredPane paneDivisionAccion;
    private javax.swing.JLayeredPane paneDivisionEfecto;
    private javax.swing.JLayeredPane paneEfectoCombo;
    private javax.swing.JLayeredPane paneEfectoField;
    // End of variables declaration//GEN-END:variables

    private int IDForm;
    private Formulario datosFormulario;
}
