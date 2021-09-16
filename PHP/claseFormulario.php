
<?php

//Autor: Jocsan Plazas
//Fecha: 01/06/2021
//Creación de un formulario para hacer el registro en una conferencia en linea

#------------------------------------------------------

class IngresoDatos{//Definir la clase Nombre

    function crearTextBox(){//Definir el método que creará una caja de texto para escribir el nombre del usuario
      
        $cajaIdentificacion ='<label id="etiquetaIdentificacion" for="">Número de identificación</label><br> '.'<input type="text" maxlength="10" name="identificacion" autocomplete="off" required><br><br>';
        $cajaNombres ='<label id="etiquetaNombres" for="">Nombres</label><br> '.'<input type="text" name="Nombres" maxlength="20" autocomplete="off" required><br><br>';
        $cajaApellidos ='<label id="etiquetaApellidos" for="">Apellidos</label><br> '.'<input type="text" name="Apellidos" maxlength="20" autocomplete="off" required><br><br>';
        $cajaEmail ='<label id="etiquetaEmail" for="">Correo electrónico</label><br> '.'<input type="email" name="Email" autocomplete="off" required><br><br>';
        $cajaTelefono ='<label id="etiquetaTelefono" for="">Teléfono</label><br> '.'<input type="tel" name="Telefono" maxlength="10" autocomplete="off" required><br><br>';

        $camposEntrada = $cajaIdentificacion . $cajaNombres . $cajaApellidos . $cajaEmail . $cajaTelefono;

    return $camposEntrada;
    }

}


class listasSeleccion{ //Definir la clase para listas desplegables
 
    function crearListasSeleccion($listaOpciones){ //Definir el método que creará la lista de deportes a escoger

    $text =" ";
        foreach ($listaOpciones as $opcion)
        //$texOpc= '<option value='.$opcion.'>'.$opcion.'</option>';
        $text = '<option value="'.$opcion.'">'.$opcion.'</option>'.$text;
        //$texOpc= '<ul><li>'.$opcion.'</li></ul>';
        
        return $text;
    }
}

#------------------------------------------------------

#En este archivo solo debe quedar la clase,  

?>