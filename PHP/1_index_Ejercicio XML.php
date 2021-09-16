<!DOCTYPE html>
<html lang="en" class="h-100">
<!---------------------------------------------------------------------------------------
        // Cabeza de la Página
        //--------------------------------------------------------------------------------------->

<head>
    <!---------------------------------------------------------------------------------------
    // Título del Documento
    //--------------------------------------------------------------------------------------->
    <title>CURSO PROGRAMACIÓN WEB 1</title>

    <!---------------------------------------------------------------------------------------
                // Sección de Metadatos
                //--------------------------------------------------------------------------------------->

    <!--Indica que la codificación de caracteres es más amplio-->
    <meta charset="utf-8" />

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>


    <!--Contenido Responsive----Indica que la página es tipo "Responsive", se ajusta a cualquier pantalla-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <meta name="description"
        content="Aerodynamic Athlete es una tienda de ropa deportiva ubicada en la ciudad de Bogotá,
                    que ofrece un catalogo amplio de prendas de vestir, calzado, accesorios y nutrición dentro de una gama extensa de deportes" />

    <meta name="autor" content=" Mario Alejandro Bonilla Galindo" />

    <meta name="generator" content="Aerodynamic 1.0.0" />

    <meta name="keywords"
        content="Ropa, calzado, máquinas deportivas, Suplementos Vitamínicos, accerios para el deporte" />

    <title>Aerodynamic Athlete : Cómodo y resistente.</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/" />
    <link rel="icon" href="Imágenes/LOGO.svg" type="image/svg" />

    <link href="blog\signin.css" rel="stylesheet">

    <!--------------------------------------------------------------------------------------
                    Bootstrap core CSS 
                    //--------------------------------------------------------------------------------------->

    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    /*Clases Para Selección de filas-->*/

    .selected {
        cursor: pointer;
    }

    .selected:hover {
        background-color: #0585c0;
        color: white;
    }

    .seleccionada {
        background-color: red;
        color: red;
    }
    </style>

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />



</head>

<body>

    <div class="container">

        <h1 align="center">CURSO PROGRAMACIÓN WEB 1</h1>
        <h2 align="center">FASE4 EJERCICIO SCRIPT XML</h2>

        <br><br>

       
        <!---------------------------------------------------------------------------------------
// -- Tabla: Formulario de Consulta Principal -
//--------------------------------------------------------------------------------------->

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

            <!-- -->

            <br><br>
            <div>
                <table id="cotiza" class="table table-sm table-dark">
                    <thead align="center">
                        <tr>
                            <th colspan="5" scope="col">
                                SCRIPT QUE OBTIENE DATOS DE UN ARCHIVO XML
                            </th>
                        </tr>
                    </thead>
                    <tbody align="center">

                        <tr>
                            <td><b>DATOS XML:</td>
                            <td><b>FUNCIÓN PHP SimpleXML:</td>
                        </tr>

                        <tr>

                            <td align="left">

                            <?xml version="1.0" encoding="utf-8"?>
                            <Table xmlns="http://www.w3.org/TR/html4/" >
      
                                <Row>
                                    <Cell><Data >Código</Data></Cell>
                                    <Cell><Data >Deporte</Data></Cell>
                                    <Cell><Data >Producto</Data></Cell>
                                    <Cell><Data >Tipo</Data></Cell>
                                    <Cell><Data >Género</Data></Cell>
                                    <Cell><Data >Edad</Data></Cell>
                                    <Cell><Data >Marca</Data></Cell>
                                </Row>
                                <Row>
                                    <Cell><Data >1</Data></Cell>
                                    <Cell><Data >Futbol &amp; Similares</Data></Cell>
                                    <Cell><Data >Zapatilla Predator</Data></Cell>
                                    <Cell><Data >Calzado</Data></Cell>
                                    <Cell><Data >Hombre</Data></Cell>
                                    <Cell><Data >Adulto</Data></Cell>
                                    <Cell><Data >Adidas</Data></Cell>
                                </Row>
                                <Row>
                                    <Cell><Data >2</Data></Cell>
                                    <Cell><Data >Atletismo &amp; Similares</Data></Cell>
                                    <Cell><Data >Sudadera</Data></Cell>
                                    <Cell><Data >Ropa</Data></Cell>
                                    <Cell><Data >Mujer</Data></Cell>
                                    <Cell><Data >Adulto</Data></Cell>
                                    <Cell><Data >Nike</Data></Cell>
                                </Row>
                                <Row>
                                    <Cell><Data >3</Data></Cell>
                                    <Cell><Data >Atletismo &amp; Similares</Data></Cell>
                                    <Cell><Data >Cachucha</Data></Cell>
                                    <Cell><Data >Accesorios</Data></Cell>
                                    <Cell><Data >Hombre</Data></Cell>
                                    <Cell><Data >Niño</Data></Cell>
                                    <Cell><Data >diadora</Data></Cell>
                                </Row>
                                <Row>
                                    <Cell><Data >4</Data></Cell>
                                    <Cell><Data >Ciclismo &amp; Similares</Data></Cell>
                                    <Cell><Data >Bicicleta</Data></Cell>
                                    <Cell><Data >Maquinaria</Data></Cell>
                                    <Cell><Data >Hombre</Data></Cell>
                                    <Cell><Data >Adulto</Data></Cell>
                                    <Cell><Data >Shimano</Data></Cell>
                                </Row>-->
                                </Table>    
                            

                                
                                </td>

                            <td align="left"><b>

                               <?php 
                                if (isset($_POST["submit"])) {
                                    
                                    $xml=simplexml_load_file("catalogo.xml") or die("Error: Cannot create object");
                                    print_r($xml);
                                    
                                    //echo $xml->Row[0]->Cell[0]->Data . "<br>";
                                    //echo $xml->Row[0]->Cell[1]->Data;
                                            
                                    
                                //for ( $Row=0; $Row<=5; $Row++)
                                //echo "Código: ".$Row." ";

                                  //  for ( $Cell=0; $Cell<=7; $Cell++)
                                    //echo "Deporte: ".$xml[$Row][$Cell]." ";

                                    //    for ( $Data=0; $Data<=7; $Data++)
                                    //    echo $xml[$Row][$Cell][$Data];


                                    //foreach ( $xml as $key=>$val)
                                //echo $key."= $".$val."<br>";
                                
                           
                                }
                                
                                ?>

                            </td>



                        <tr>
                            <td><b></td>
                            <td align="left"><b>

                                    <input type="submit" name="submit" value="ENVIAR">
                                </b>

                            </td>

                        </tr>

                    </tbody>
                </table>


            </div>


        </form>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

</body>

</html>