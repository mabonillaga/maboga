<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!---------------------------------------------------------------------------------------
//                                    Bootstrap CSS
//                            Establece el Estilo Bootstrap
//--------------------------------------------------------------------------------------->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <link rel="icon" type="image/png" href="E:\1_UNAD 20032019\05 PERIODO 16_04 2020\03 PROGRAMACIÓN WEB 204034 6\F2-204034-g05-(v3)\PaginaWeb-HealthyBody-(v3)\Imágenes\logo.png" />
    <title>Cotización de Servicios</title>
    <link rel="stylesheet" type="text/css" href="E:\1_UNAD 20032019\05 PERIODO 16_04 2020\
		03 PROGRAMACIÓN WEB 204034 6\U2 FASE 3 DECIDIR PROYECTO\F2-204034-g05-(v2)\
		PaginaWeb-HealthyBody-(v2)\CSS3\Estilo1.CSS">
</head>

<body>

    <!---------------------------------------------------------------------------------------
//                                  -- EL CONTENIDO INICIA AQUÍ  --
//--------------------------------------------------------------------------------------->
    <!-- -->
    <div class="container">


        <h1>COTIZA TUS SERVICIOS</h1>


        <!---------------------------------------------------------------------------------------
// Tablas de Precios
//--------------------------------------------------------------------------------------->

        <div class="seccion2">
            <table class="table table-sm table-dark">
                <thead align="center">
                    <tr>
                        <th colspan="2" scope="col">VALOR DE CADA SERVICIO</th>
                    </tr>
                </thead>
                <tbody align="center">
                    <tr>
                        <th scope="row">Mensual</th>
                        <td> $60.000</td>

                    </tr>
                    <tr>
                        <th scope="row">Semestral</th>
                        <td>$500.000</td>

                    </tr>
                    <tr>
                        <th scope="row">Anual</th>
                        <td colspan="1">$800.000</td>

                    </tr>

                </tbody>
            </table>
        </div>


        <div class="seccion2">
            <table class="table table-sm table-dark">
                <thead align="center">
                    <tr>

                        <th colspan="3" scope="col">DESCUENTOS POR CANTIDAD DE SERVICIOS ESCOGIDOS SEGUN
                            EL TIPO DE CLIENTE</th>
                    </tr>
                    <tr>

                        <td><b>Cantidad</td>
                        <td><b>Cliente Nuevo</td>
                        <td><b>Cliente Antiguo</td>
                    </tr>
                </thead>

                <tbody align="center">
                    <tr>

                        <td>1</td>
                        <td>0%</td>
                        <td>10%</td>
                    </tr>
                    <tr>

                        <td>2</td>
                        <td>10%</td>
                        <td>20%</td>
                    </tr>
                    <tr>

                        <td>3</td>
                        <td>20%</td>
                        <td>30%</td>
                    </tr>

                </tbody>
            </table>
        </div>

        </td>
        </tr>
        </Table>
    </div>
    <!--Fin Container Tabla Precios-->

    <!---------------------------------------------------------------------------------------
//                                FORMULARIO PRINCIPAL 
// Compuesto un interruptor, una lista deplegable, una caja de verificación, botón
//--------------------------------------------------------------------------------------->
    <div>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">


                    <!---------------------------------------------------------------------------------------
            // -- TIPO DE CLIENTE: interruptor dentro del formulario para determinar el tipo de cliente-
            //--------------------------------------------------------------------------------------->
                    <!-- -->

                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" name="nuevo" />
                        <label class="custom-control-label" for="customSwitch1">Active esta casilla si es <b>"Cliente Nuevo"</b></label>
                    </div>
                    <br />

            <!---------------------------------------------------------------------------------------
            // DURACIÓN DEL SERVICIO: lista desplegable para determinar el periodo de pago. 
            //--------------------------------------------------------------------------------------->
                    <!-- -->
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">
                        <h6>Selecciona la forma de pago por periodos:</h6>
                    </label>
                    <select style="width: 200px" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="periodo[]">
                        <option selected>Formas de Pago...</option>
                        <option value="1">Mensual</option>
                        <option value="2">Semestral</option>
                        <option value="3">Anual</option>
                    </select>
                    <!---------------------------------------------------------------------------------------
            // TIPO DE SERVICIO: cajas de verificación para determinar el tipo y la cantidad de servicios. 
            //--------------------------------------------------------------------------------------->
                    <!-- -->
                    <br>
                    <br>
                    <h6>Selecciona los servicios que desee:</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="serv[]" value="Pilates" size="15">
                        <label class="form-check-label" for="inlineCheckbox1">Pilates</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="serv[]" value="Aeróbicos">
                        <label class="form-check-label" for="inlineCheckbox2">Aeróbicos</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="serv[]" value="Húmeda">
                        <label class="form-check-label" for="inlineCheckbox3">Zona Húmeda</label>
                    </div>

                    <!---------------------------------------------------------------------------------------
            // TOTAL DEL SERVICIO: botón que totaliza la cotización. 
            //--------------------------------------------------------------------------------------->
                    <!-- -->
                    <button type="submit" name="submit" class="btn btn-primary my-1">VER COSTO TOTAL</button>

                    <!---------------------------------------------------------------------------------------
            // TOTAL DE LA COTIZACIÓN: caja de texto que muestra el total. 
            //--------------------------------------------------------------------------------------->
                    <!-- -->
                    <!--
                        <h6>El total de su cotización es:</h6>

                        <div class="row">
                            <div class="col-xs-3">
                                <input type="text" class="form-control" placeholder="TOTAL" value ="">
                            </div>-->
                    </form>


    </div> 

    <!----------------------------------------------------------------------------------------
//                                SECCIÓN PHP
//--------------------------------------------------------------------------------------->
        <?php

        if (isset($_POST["submit"])) {


            echo "<h1><b>RESULTADO DE TU COTIZACIÓN </b></h1>";

            //---------------------------------------------------------------------------------------
            //DEFINICIÓN DE VARIABLES
            //---------------------------------------------------------------------------------------

            $CS = 0;
            $A1 = 0;
            $A2 = 0;
            $S = 0;
            $c = 0;
            $per = "";
            $TOTAL = 0;

            //---------------------------------------------------------------------------------------
            //DEFINICIÓN DEL TIPO DE CLIENTE NUEVO/ANTIGUO: Determina el tipo de descuentos a aplicar
            //---------------------------------------------------------------------------------------

            if (isset($_POST["nuevo"])) {
                $n = "NUEVO";
            } else {
                $n = "ANTIGUO";
            }
            //var_dump($n);
            echo "Eres es un Cliente: " . "<b>" . $n . "</b>";
            //---------------------------------------------------------------------------------------
            //DEFINICIÓN del "Costo por cada Periodo"
            //---------------------------------------------------------------------------------------

            if (isset($_POST["periodo"])) { //si existe dentro del método Post un arreglo llamado "periodo" entonces
                foreach ($_POST["periodo"] as $p) { // recorra todas las posiciones o índices del arreglo y capture cada índice en la variable "p" (periodo)

                    if ($p == "1") {
                        $c = 60000;
                        $per = "MENSUALMENTE";
                        echo "<br>" . "Has escogido pagar:  " . "<b>" . $per . "</b>";
                    } else {
                        if ($p == "2") {
                            $c = 500000;
                            $per = "SEMESTRALMENTE";
                            echo "<br>" . "Has escogido pagar:  " . "<b>" . $per . "</b>";
                        } else {
                            if ($p == "3") {
                                $c = 800000;
                                $per = "ANUALMENTE";
                                echo "<br>" . "Has escogido pagar:  " . "<b>" . $per . "</b>";
                            } else {
                                $c = 0;
                                echo "<br>" . "DEBES ESCOGER AL MENOS UN :  " . "<b>" . "PERIODO" . "</b>";
                            }
                        }
                    }
                }
            }
            //var_dump($p); // muestreme todos los valores que se capturan en la variable "c" (costo) 
            //var_dump($c); // muestreme todos los valores que se capturan en la variable "c" (costo) 

            //---------------------------------------------------------------------------------------
            //DEFINICIÓN DE LA CANTIDAD DE SERVICIOS
            //---------------------------------------------------------------------------------------
            //SUMATORIA DE CADA ELECCIÓN CON ESTRUCTURA "foreach": Requiere el mismo "name" como arreglo [] para todos los "input" dentro del html.

            if (isset($_POST["serv"])) { //si existe dentro del método Post un arreglo llamado "serv" entonces
                echo "<br>" . "<b>El/Los siguiente(s) Servicio(s):</b>"; // muestreme todos los valores que quedan en el arreglo llamado "serv".
                var_dump($_POST["serv"]); // muestreme todos los valores que quedan en el arreglo llamado "serv".
                foreach ($_POST["serv"] as $Ser) { // recorra todo las posiciones o índices del arreglo y capture cada índice en la variable "S"(servicios)
                    {
                        //echo $Ser; // muestreme todos los valores que quedan en la variable "S"
                        $S = 1;
                        $CS = $CS + $S;
                    } //convierte la variable "S" en 1; genera un incremento cada vez que selecciona un servicio.


                }
            } else {
                $CS = 0;
                echo "<br>" . "DEBES ESCOGER AL MENOS UN :  " . "<b>" . "SERVICIO" . "</b>";
            }

            //var_dump($CS); // muestreme todos los valores que quedan en la variable "S"

            //---------------------------------------------------------------------------------------
            //DEFINICIÓN DE PORCENTAJES O TIPO DE DESCUENTOS DE ACUERDO AL CLIENTE
            //---------------------------------------------------------------------------------------


            if ($n == "NUEVO" && $CS == 1) {

                $TOTAL = ($c * $CS) - (($c * $CS * 0) / 100);
            } else {
                if ($n == "NUEVO" && $CS == 2) {

                    $TOTAL = ($c * $CS) - (($c * $CS * 10) / 100);
                } else {
                    if ($n == "NUEVO" && $CS == 3) {

                        $TOTAL = ($c * $CS) - (($c * $CS * 20) / 100);
                    } else {
                        if ($n == "ANTIGUO" && $CS == 1) {

                            $TOTAL = ($c * $CS) - (($c * $CS * 10) / 100);
                        } else {
                            if ($n == "ANTIGUO" && $CS == 2) {

                                $TOTAL = ($c * $CS) - (($c * $CS * 20) / 100);
                            } else {
                                if ($n == "ANTIGUO" && $CS == 3) {
                                    /*var_dump($CS); // muestreme todos los valores que quedan en la variable "S"
                                    var_dump($n); // muestreme todos los valores que quedan en la variable "S"
                                    var_dump($c); // muestreme todos los valores que quedan en la variable "S" */
                                    $TOTAL = ($c * $CS) - (($c * $CS * 30) / 100);
                                } else {
                                    $TOTAL = 0;
                                }
                            }
                        }
                    }
                }
            }





            //---------------------------------------------------------------------------------------
            //RESULTADO
            //---------------------------------------------------------------------------------------

            if ($CS == 0) {
                $TOTAL = 0;
            } else {
                $TOTAL = $TOTAL + (($TOTAL * 19) / 100);
            }

            echo "<br><h4>Cantidad de Servicios:  " . "<b>" . $CS . "</b></h4>";
            echo "<br><h3>Tu cotización tiene un costo total de:  $" . "<b>" . $TOTAL . "</b>" . "  Pesos" . "<br> Incluido el IVA del <b> 19% </h3>";
        }

        ?>


        <!---------------------------------------------------------------------------------------
//                                -- Bootstrap CSS --
//                    Componente javaScript complemento de Boostrap
//                    Optional JavaScript; choose one of the two!
//--------------------------------------------------------------------------------------->
        <!--  -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>