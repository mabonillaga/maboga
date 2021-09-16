<?php
//Autor: Jocsan Plazas
//Fecha: 16/06/2021
//Página donde se mostraran los elementos enviados en el formulario


                //*if (isset($_POST["submit"])) {
                    
                    $servername = "localhost";
                    $username = "root";
                    $password = "123";
                    $dbname = "catalogo";
                    
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    unset($_POST['submit']);
                    //var_dump($_POST);



?>
<!DOCTYPE html>
<html lang="es">

        <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Registro exitoso</title>
                <link rel="stylesheet" href="estilos/estilos.css">
        </head>

        <body>
                        

        <section style="text-align:center; id="imprimir> 
                <?php

                        /*echo "<h3>Inscripción realizada con éxito</h3><br>";
                        echo "\n";
                        echo "<h4>Datos registrados:</h4>";
                      
                        echo "Tipo identificación: ".$_POST["tipoId"]."<br><br>";
                        echo "\n";

                        echo "Número de identificación: ".$_POST["identificacion"]."<br><br>";
                        echo "\n";

                        echo "Nombre: ".$_POST["Nombres"]."<br><br>";
                        echo "\n";

                        echo "Apellido: ".$_POST["Apellidos"]."<br><br>";
                        echo "\n";

                        echo "Correo electrónico: ".$_POST["Email"]."<br><br>";
                        echo "\n";

                        echo "Teléfono: ".$_POST["Telefono"]."<br><br>";
                        echo "\n";

                        echo "País de origen: ".$_POST["pais"]."<br><br>";
                        echo "\n";

                        echo "Premio seleccionado: ".$_POST["premio"]."<br><br>";
                        echo "\n";
                
                        echo "Talla: ".$_POST["talla"]."<br><br>";
                        echo "\n";
                        echo "\n";*/

                         
                        foreach($_POST as $key=>$value){
                         
                        echo $key." = ".$value."<br><br>";
                        
                       

                       $sql = "INSERT INTO conferencia (tipoId, identificacion, Nombres, Apellidos, Email, Telefono, pais, premio, talla)
                        VALUES ('$_POST[tipoId]','$_POST[identificacion]','$_POST[Nombres]','$_POST[Apellidos]','$_POST[Email]','$_POST[Telefono]','$_POST[pais]','$_POST[premio]','$_POST[talla]')";

                     }
                     if ($conn->query($sql) === TRUE) {
                         echo "New record created successfully";
                         } else {
                         echo "Error: " . $sql . "<br>" . $conn->error;
                         }
                    
                         
                         $conn->close();

                     


                ?>

                <form action="4_indexConferencia SQL.php">
                        <input id="boton" type="submit" value="Volver">
                </form>
        </section>

        </body>

</html>