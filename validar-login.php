<?php
    /*
    echo 'Username =', $_POST['username'], '<br>';
    echo 'Password =', $_POST['password'];
    */

    if($_POST['username'] == 'Lara' && $_POST['password'] == 12345){
        echo '<h2>Bienvenid' , $_POST['username'], '<h2>';
    }
    else
    {   echo '<p>Nombre o Contraseña INCORRECTOS</p>';}
?>