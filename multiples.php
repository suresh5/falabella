<?php
// Your code here!
$outputArr = ['15' => 'Linianos', '3' => 'Linio', '5' => 'IT'];
    for($i=1;$i<=100;$i++){
        $printed = 0;
        foreach($outputArr as $key => $val){
            if($i % $key ==0){
             echo $val;
             $printed = 1;
             break;
            } 
        }
        if(!$printed){
            echo $i;
        } 
        echo "<br>";
    }
?>
