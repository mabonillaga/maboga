<!---------------------------------------------------------------------------------------
// SECCIÓN PAGINA HTML
//--------------------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="en" class="h-100">
<!---------------------------------------------------------------------------------------
        // Cabeza de la Página
        //--------------------------------------------------------------------------------------->

<head>
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


    <!--Script JQuery para la agregar filas a la tabla  
//------------------------------------------------------------------------------------->
    <script>
    $(document).ready(function() {
        $('#bt_add').click(function() {
            agregar();
        });

        $('#bt_del').click(function() {
            eliminar(id_fila_selected);
        });
    });

    var cont = 0;

    const formatterPeso = new Intl.NumberFormat('es-CO', {
        style: 'currency',
        currency: 'COP',
        minimumFractionDigits: 0
    })



    function agregar() {

        valor1 = $("#producto1 option:selected").html();
        valor2 = $("#producto1 option:selected").val();
        valor3 = $("#cantidad1 option:selected").val();
        SubTotal = (valor2 * valor3);

        cont++;

        var fila = '<tr align="center" class="selected" id="file' + cont +
            '" onclick="selector(this.id);"> <td name="Item">' +
            cont + '</td> <td name="Producto"> ' + valor1 + ' </td> <td name="Valor unitario"> ' + formatterPeso.format (valor2) +
            '</td> <td name="Cantidad">' + valor3 +
            '</td> <td name="totalCantidad"> <b>  <input readonly class="table-dark" style="text-align:center;" type="text" name="' +
            cont + '" value="' + formatterPeso.format (SubTotal) + '"> </td> </tr>';


        $('#cotiza').append(fila);

        reordenar();

    }




    function selector(id_fila) {
        if ($('#' + id_fila).hasClass('seleccionada'))
            $('#' + id_fila).removeClass('seleccionada');
        else {
            $('#' + id_fila).addClass('selecccionada');
        }
        id_fila_selected = id_fila;
    }

    function eliminar(id_fila) {
        $('#' + id_fila).remove();
        reordenar();
    }

    function reordenar() {
        var num = 1;
        $('#cotiza tbody tr').each(function() {
            $(this).find('td').eq(0).text(num)
            num++;
        });
    }
    </script>

</head>

<body>

    <!---------------------------------------------------------------------------------------
//                                  -- EL CONTENIDO INICIA AQUÍ  --
//-----------------------------------------------------------------------------------
                // Tablas de Precios
    ----------------------------------------------------------------------------------------->
    <!--  -->

    <div class="container">
        <h1>COTIZA TUS PRODUCTOS</h1>
        <h4><b>Seleccione los productos y la Cantidad, luego haga click en "Agregar Producto"</b></h4>
        <h4><b>F5 para restablecer</b></h4>


        <!----Caja de Selección Múltiple: Sección a evaluar por PHP     
            _________________________________________________________________ -->

        <select style="width: 350px" class="custom-select my-1 mr-sm-2" id="producto1" name="producto1[]">
            <option selected>Productos...</option>
            <option value=60000 name="Camiseta Esqueleto Atletismo">Camiseta Esqueleto Atletismo</option>
            <option value=45000>Pantaloneta Basquetball</option>
            <option value=800000>Zapatillas Futboll Adidas</option>
            <option value=1200000>Bicicleta Todoterreno Shimanu</option>
            <option value=150000>Proteína Suplemento Nutricional </option>
            <option value=90000>Gorra Nike</option>
        </select>


        <select style="width: 50px" class="custom-select  mr-sm-2" id="cantidad1" name="cantidad1[]">
            <option selected>Productos...</option>
            <option value="1" name="">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>



        <button id="bt_add" type="add" name="add" class="btn btn-primary my-1">AGREGAR PRODUCTO</button>
        <button id="bt_del" type="del" name="del" class="btn btn-primary my-1">ELIMINAR PRODUCTO</button>

<!----------------------------------------------------------------------------------------
//                                SECCIÓN PHP
//------------------------------------------------------------------------------------->
    
    
    <?php                                   
                                        
                                        $Total=0;
                                        
                                        //var_dump($_POST)."<br>";
                                                                                
                                        foreach($_POST as $x=>$y){
                                        
                                        $a = substr($y,3); // extrae una cadena a partir de la posición 3.

                                        $a = str_ireplace(".","","$a"); // reemplaza un caracter por otro dentro de la cadena.
                                        //echo count_chars($a,3)."<br>"; //define qué caracteres hay al principio de una cadena. 
                                        
                                        //var_dump($a)."<br>";
                                        
                                        //settype($a, "integer")."<br>"; // convierte una cadena en entero.
                                        //$int_cast = (int)$a; // convierte una cadena en entero.
                                        $a = intval($a); // convierte una cadena en entero.
                                                                     
                                        //var_dump($a)."<br>";

                                        //echo $x."=".$a."<br>";
                                        
                                        $Total+=$a;
                                        

                                    }   
                                    
                                

                            ?>

<!----------------------------------------------------------------------------------------
//                                SECCIÓN FORMULARIO TABLA DE COTIZACIÓN
//------------------------------------------------------------------------------------->
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

            <table id="cotiza" class="table table-sm table-dark">
                <thead align="center">
                    <tr>
                        <th colspan="5" scope="col">CALCULADORA</th>
                    </tr>
                    <tr>
                        <td><b>ITEM</td>
                        <td><b>PRODUCTO</td>
                        <td><b>VALOR UNITARIO</td>
                        <td><b>CANTIDAD</td>
                        <td><b>SUBTOTAL</td>

                    </tr>
                </thead>

                <tbody align="center">



                </tbody>



                <button type="submit" name="submit" class="btn btn-primary my-1"><b>COTIZAR / RESET</b></button>


        </form>
        <tr>
            <td align="center"></td>
            <td></td>
            <td></td>

            <td align="center" style="font-size:25px;"><b>TOTAL COTIZACIÓN</td>
            <td align="center" style="font-size:25px;"> <strong> $

                    <?php   
                                                                  
                                            echo number_format($Total,0,",",".");    
                    ?>

                </strong>

            </td>
        </tr>
        </table>



    </div>
    <!--Fin Container Tabla Precios-->


    <!---------------------------------------------------------------------------------------
//                                -- Bootstrap CSS --
//                    Componente javaScript complemento de Boostrap
//                    Optional JavaScript; choose one of the two!
//--------------------------------------------------------------------------------------->
    <!--  -->


    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>

</body>

</html>