<?php
ini_set("display_errors",1);
// ini_set("memory_limit",0);

// notice
// warning
// fedral error
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>

<?php   
        // $btechClassWithMadBoys='23566';
        // $btechClassWithMadBoys=(float)$btechClassWithMadBoys='23366';
        // $array=array(1,2,3,4,5,6,7,8,9);
        // array();
        $btechClassWithMadBoys=array
        (
            array(
                '0'=>'kanchana',
            '1'=>'ankur'),
            array(
                '0'=>'kanchana2',
            '1'=>'ankur jaglan'),

        );
        foreach($btechClassWithMadBoys as $row){
            
        }
    

        // echo "<h2>weriurhfiue</h2>";
        //  print_r ("<p>this is my page in php</p>");
        //  print_r($btechClassWithMadBoy);
        //  die;
        //  exit;
        echo 'this is array'.' this is array';
        echo '.' . 4738 . '<br>';
         print_r($btechClassWithMadBoys);
         print_r($btechClassWithMadBoys[0][0]);
    $result='';
    $sectionA=40;
    $sectionB=30;
        echo '<br>';
        echo $result=$sectionA + $sectionB;
        echo '<hr>';
        // loop
        $table ='<table border="1" style="width:100%;">';
        foreach($btechClassWithMadBoys as $row){
            $table .='<tr>';
            foreach($row as $column){
                if($column=='human'){
                    // $column='';
                    // break;
                    continue;
                }
                else if($column=='gaurav'){
                    $column ='smart boya and girls';
                }
                else{
                    $column ='i am jaat';
                }
                $table .='<td>'.$column.'</td>';
                // echo $column;
                // echo'<br>-------';

            }
            // echo $row[0];
            $table .='</tr>';
            echo '<br>';
        }
        $table .='</table>';
        echo $table;
        // for(){

        // }
        // while(){

        // }





?>
</pre>
    <h2>weriurhfiue</h2>
    <h1>string</h1>
    <!-- string ='' -->
    <!-- float = 490.53;

    boolean = 

    object 

    loop
    assigenment
    condition 
    arithmatic operator -->
</body>
</html>