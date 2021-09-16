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
        <h2 align="center">FASE 3 REQUISITO FORMULARIO DE DATOS CLIENTES</h2>

        <br><br>


        <!-- Respuesta al Formulario 
-------------------------------------------------->
        <!------>
                <?php 

               /* echo "<h4> Variables Recibidas:</h4>";
                foreach($_POST as $nameF=>$value){
                echo "<br>".$nameF."=".$value;
               // var_dump($_POST);
                }*/

                ?>


        <div>
            <table id="cotiza" class="table table-sm table-dark">
                <thead align="center">
                    <tr>
                        <th colspan="5" scope="col">
                            <?php 
                                echo "<h4> Los datos enviados fueron: </h4>";
                            ?>

                        </th>
                    </tr>
                </thead>
                <tbody align="center">

                    <tr>
                        <td align="right"><b>BIENVENIDO:</td>
                        <td align="left"><b>
                            
                                <?php 
                                   foreach($_POST as $key=>$value){
                                   echo $key."=".$value."<br>";
                                   }
                                ?>
                        </td>

                    </tr>


                    <tr>
                        <td><b></td>
                        <td align="left"><b>


                                <input type="submit" onclick="location.href='2_index.php'" value="VOLVER">
                             <!--   <button type="button" onclick="location.href='index.php'">VOLVER</button>--->

                        </td>

                    </tr>

                </tbody>
            </table>


        </div>




        <body>

</html>