<!---------------------------------------------------------------------------------------
 // Cabeza de la Página
 //--------------------------------------------------------------------------------------->


 <?php 

// Clase Elementos de Control del un Formulario : 
//Una Lista tipo Select (lista desplegable) y un control de entrada tipo radio (lista de selección)

class elementsCtrlFrm {



    //Methods
    function construct(){


    }

  /*  <label for="fname">First name:</label>
    <input type="text" id="fname" name="fname"><br><br>
    <label for="lname">Last name:</label>
    <input type="text" id="lname" name="lname"><br><br>
    <input type="submit" value="Submit">*/

    /*function CrearLista($Lista,$nombre){

        $cadenaInicio='<select name="'.$nombre.'">';
        $opcion="";
        foreach($Lista as $valor){
            $opcion="<option>".$valor."</option>".$opcion;
        }
        $cadenaFinal="</select>";

        $listaSelect=$cadenaInicio.$opcion.$cadenaFinal;
        return $listaSelect;

    }*/
    function CrearInput($Form1,$nameF){
        $opcion="";
        foreach($Form1 as $valor){
        $texto='<label>'.$valor.'</label>';
        $opcion= $texto.'&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="'.$nameF.'" name ="'.$valor.'" value=" ">'.'<br>'. $opcion;

        }
        return $opcion;
        var_dump($_POST);
    }
    
} 

?>