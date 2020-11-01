<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'tintuc';
$link = mysqli_connect($host, $user, $password, $database);

    $un = $_GET['un'];

    $qr = " SELECT * FROM `users` WHERE Username = '$un' ";
   
    $q = mysqli_query($link, $qr);


    $dong = mysqli_num_rows($q);
    echo $dong;
    

?>