<?php
    include("../config/configuration.php");
    if(isset($_POST['title']) && trim($_POST['title'])!=''){
        $title =$_POST['description'];
        $description =$_POST['description'];

        $query="insert into role(name,description)values('$title','$discription')";
                echo($query);
        $conn->query($query);
        $checkresult =$conn->query($query);
        die;
        if($checkresult){
            $_SESSION['status']='pass';
            header("location:role.php");
            die;
        }
        
        // insert into tablename('column','column')values('','');
        // update tablename set column1=value, column2=value where id=1
    }
        $_SESSION['status']='fail';
        header("location:role.php");
        die;
?>