<?php

    ini_set("display_error",1);
    session_start();

    $host='localhost';
    $username="root";
    $password="";
    $database="bms";



    $conn=mysqli_connect($host,$username,$password,$database);

    // check connection
    // if($conn->connect_error){
    //     echo 'failed';

    // }
    // else{
    //     echo'pass';
    // }


?>


