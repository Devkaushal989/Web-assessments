<?php
    include("../config/configuration.php");

if(isset($_POST['name']) && trim($_POST['name'])!=''){
    $title = $_POST['name'];
    $detail = $_POST['description'];

    echo $query="insert into category(name,detal) values('$title','$detail')";
    $result = $conn->query($query);
    

    echo $result;


}
?>