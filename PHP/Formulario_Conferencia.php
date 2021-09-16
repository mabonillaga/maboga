<?php
//Autor: Jocsan Plazas
//Fecha: 16/06/2021
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
    include ("claseFormulario.php");            //Llamada a la clase definida

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

    <h1 align="center">Formulario de registro conferencia de salud física</h1>
    
    <p>Por favor diligencie todos los campos para realizar exitosamente el registro para la conferencia de salud física liderada por AeroDynamic-Athlete</p>

    <div id=formulario>
        <form action="imprimeDatos.php" method ="post"> <!-- Asignar el documento PHP en el cual se mostraran los datos ingresados en el formulario-->
        
        <table id="cotiza" class="table table-sm table-dark">
                    <thead align="center">
                        <tr>
                            <th colspan="5" scope="col">
                            DATOS DE INSCRIPCIÓN:

                            </th>
                        </tr>
                    </thead>
                    <tbody align="center">

                        <tr>
                            <td><b></td>
                            <td><b></td>
                            <td><b></td>
                            <td><b></td>
                            <td><b></td>
                            <td><b></td>
                            <td><b></td>
                            <td><b></td>
                            <td align="left"><b>

                           <!-- Definir la lista para seleccionar tipo de documento -->
            <p>Tipo de identificación</p>
                <select name="tipoId">            
                    <?php
                        echo $listasSeleccion->crearListasSeleccion($tiposDocumento);
                    ?>                 
                </select>   
            <br><br>

        <!-- Definir las cajas de texto para la captura de datos -->    
            <div id="textBox">
                <?php    
                echo $datosUsuario->crearTextBox();
                ?>
            </div>

        <!-- Definir la lista para seleccionar pais de origen -->
            <p>Pais de origen</p>
            <select name="pais">            
                    <?php
                        echo $listasSeleccion->crearListasSeleccion($listaPaises);
                    ?>                    
            </select>   
        <!-- Definir la lista para seleccionar premio -->
            <p>Seleccione un premio</p>
            <select name="premio">            
                    <?php
                        echo $listasSeleccion->crearListasSeleccion($listaPremios);
                    ?>
            </select>  

        <!-- Definir la lista para seleccionar talla del premio -->
            <p>Talla</p>
            <select name="talla">            
                    <?php
                        echo $listasSeleccion->crearListasSeleccion($tallas);
                    ?>                  
            </select>  

                            </td>

                        </tr>

                        <tr>
                            <td><b></td>
                            <td><b></td>
                            <td><b></td>
                            <td><b></td>
                            <td><b></td>
                            <td><b></td>
                            <td><b></td>
                            <td><b></td>
                            <td><b></td>
                            <td><b></td>
                            <td align="left"><b>

                            <br><br>
        
        <br>
        <input id="boton" type="submit" value="Enviar">
        <input id="boton" type="reset" value="Borrar">

                                </b>

                            </td>

                        </tr>

                    </tbody>
                </table>

   

       
        </form>
    </div>
    

</body>

</html>