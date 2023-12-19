<?php
    include("../config/config.php");

if(isset($_POST['name']) && trim($_POST['name'])!=''){
    $title = $_POST['name'];
    $detail = $_POST['description'];

    echo $query="insert into category(name,detail) values('$title','$detail')";
    $result = $conn->query($query);
    

    echo $result;


}
?>