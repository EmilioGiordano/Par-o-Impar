<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <fieldset>

        <form action="actividad8.php" method="POST">

        <p>Ingrese un número entero: <input type="text" name="integer" maxlength="19"></p>      
        <!-- Valor maximo asignado a un INTEGER: 9223372036854775807 -->
        <!--        Arquitectura de 64 bits, 19 CARACTERES           -->

        <p><input type = "submit"></p>
        

        </form>

     <?php
     

    main();
    

    
    function main(){
        $numeroIngresado = procesarFormulario();
        if ($numeroIngresado !== null){
            if (is_numeric($numeroIngresado) && is_int($numeroIngresado + 0)) {
                determinateParity($numeroIngresado);
            } else {
                print "El valor ingresado no es un NÚMERO ENTERO.";
            }
        }
    }
    
    function procesarFormulario() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['integer'])) {
            $intnumber = $_POST['integer'];
            
            return $intnumber;
        } else {
            return null; // Si no se envió un formulario, devuelve null
        }
    }
    
    
    function determinateParity($intnumber){
        if ($intnumber % 2 == 0){
            print "El número $intnumber es par";
        } else {
            print "El número $intnumber es impar";
        }
    }
        ?>

    </fieldset>



    
</body>
</html>




<!--  
Grupo 1:
    realizar una página web que solicite el ingreso de un número entero
    positivo.
    calcule si es par o impar, e imprima un mensaje. 
    Si el número 
    ingresado es par, el mensaje deberá decir “El número [XXXX] es PAR”. 
    Caso contrario, se deberá mostrar el texto “El número [XXXX] es IMPAR”. 
    
    Reemplazando [XXXX] con el número ingresado por el usuario. Importante: 
    validar la carga de datos.
    
-->  