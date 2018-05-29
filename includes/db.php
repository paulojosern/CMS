<?php
    $host ='';
    $user = '';
    $pass = '';
    $db_name = '';
    $con = mysqli_connect('localhost', 'root', 'B@y350', 'cms');
    if(!$con){
        die('Erro na conexão' . mysqli_error());
    }
?>