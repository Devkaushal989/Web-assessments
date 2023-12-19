<?php
    include("../config/configuration.php");

if(isset($_POST['name']) && trim($_POST['name'])!=''){
    $title = $_POST['name'];
    $detail = $_POST['email'];
    $password = $_POST['password'];

    echo $query="insert into employee(name,email_id,password) values('$title','$detail','$password')";
    $result = $conn->query($query);
    

    echo $result;


}
?>