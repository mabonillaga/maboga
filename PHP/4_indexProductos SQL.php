<?php
//Autor: Jocsan Plazas
//Fecha: 16/07/2021
//Página de inicio donde se mostrará el formulario
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de inscripción</title>
    <link rel="stylesheet" href="estilos/estilos.css">
</head>

<body>

    

    <?php
    include ("4_claseConferencia SQL.php");            //Llamada a la clase definida

    $datosUsuario = new IngresoDatos();         // Crear el objeto de la clase que genera los campos de ingreso de datos
    $listasSeleccion = new ListasSeleccion();   // Crear el objeto de la clase que crea las listas para seleccionar opciones

    $tiposDocumento = ['CC','CE', 'PA', 'TI'];//Definir el arreglo con los tipos de documento
    rsort($tiposDocumento);
    $listaPaises = ['Argentina','Bolivia', 'Brazil', 'Chile', 'Colombia', 'Ecuador','Paraguay', 'Peru', 'Uruguay','Venezuela'];//Definir el arreglo con la lista de paises disponibles
    rsort($listaPaises);
    $listaPremios = ['Camiseta','Pantaloneta','Sudadera'];//Definir la lista de premios disponibles
    rsort($listaPremios);
    $tallas = ['Talla S', 'Talla M', 'Talla L', 'Talla XL'];//Definir la lista de tallas disponibles
    krsort($tallas);

    ?>

    <h1 style="text-align:center;">Formulario de registro conferencia de salud física</h1>
    
    <p style="text-align:center;">Por favor diligencie todos los campos para realizar exitosamente el registro para la conferencia de salud física liderada por AeroDynamic-Athlete</p>

    <div style="text-align:center;" id=formulario>
        <!-- Asignar el documento PHP en el cual se mostraran los datos ingresados en el formulario-->
        <form style="text-align:center;" action="4_printConferencia SQL.php" method ="post"> 
        
                        
                                DATOS DE INSCRIPCIÓN:

                

                            <!-- Definir la lista para seleccionar tipo de documento -->
                <p style="text-align:center;">Tipo de identificación</p>
                    <select style="text-align:center;" name="tipoId">            
                        <?php
                            echo $listasSeleccion->crearListasSeleccion($tiposDocumento);
                        ?>                 
                    </select>   
                <br><br>

            <!-- Definir las cajas de texto para la captura de datos -->    
                <div style="text-align:center;" id="textBox">
                    <?php    
                    echo $datosUsuario->crearTextBox();
                    ?>
                </div>

            <!-- Definir la lista para seleccionar pais de origen -->
                <p style="text-align:center;">Pais de origen</p>
                <select style="text-align:center;" name="pais">            
                        <?php
                            echo $listasSeleccion->crearListasSeleccion($listaPaises);
                        ?>                    
                </select>   
            <!-- Definir la lista para seleccionar premio -->
                <p style="text-align:center;">Seleccione un premio</p>
                <select style="text-align:center;" name="premio">            
                        <?php
                            echo $listasSeleccion->crearListasSeleccion($listaPremios);
                        ?>
                </select>  

            <!-- Definir la lista para seleccionar talla del premio -->
                <p style="text-align:center;">Talla</p>
                <select name="talla">            
                        <?php
                            echo $listasSeleccion->crearListasSeleccion($tallas);
                        ?>                  
                </select>  

                                <br><br><br>

            <input id="boton" type="submit" value="Enviar">
            <input id="boton" type="reset" value="Borrar">

            </b>

    
        </form>
    </div>
    

</body>

</html>