<?php 
 function soma(int ... $valores):string {
     
     return array_sum($valores);
     
 }

echo var_dump(soma(2,2));
echo '<br>';
echo soma(25,33);
echo '<br>';
echo soma(1.9,3.2);
echo '<br>';
    

?>