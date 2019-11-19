<?php
session_start();

$intentos = 0;
$aleatorio = 0;

function reiniciar(){
    $intentos = 0;
    $aleatorio = random_int(1, 10);
    echo $aleatorio.'<br>';
    $_SESSION['aleatorio'] = $aleatorio;
    $_SESSION['intentos'] = $intentos;
}

if(isset($_SESSION['aleatorio']) === false){
    reiniciar();
}else{
    $aleatorio = $_SESSION['aleatorio'];
    $intentos = $_SESSION['intentos'];
}

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if($_POST['boton'] == 'Reiniciar'){
        reiniciar();    
    } 
    var_dump($_POST);
    if($_POST['boton'] == "Adivinar"){
        $intentos++;
        $_SESSION['intentos'] = $intentos;
        if($aleatorio == $_POST['numero']){
            echo'Felicidades Adivinaste el numero';
        }else if($aleatorio < $_POST['numero']){
            echo'El numero secreto es menor';
        }else{
            echo'El numero secreto es mayor';
        }
    }
}
?>

<?php include('encabezado.inc.php');?>

<h1>Adivina el numero</h1>

<form action="adivina.php" sethod="POST">
    <label for="">Numero</label>
    <input type="number" name="numero">
    <input type="submit" value="Adivinar" name="boton">
    <input type="submit" value="Reiniciar" name="boton">
    <p>Intentos = <?php echo $intentos; ?> </p>
</form>

<?php include('pie.inc.php');?>