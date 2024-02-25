<?php

echo "<br>";
$depan = "Riki";
$belakang = "Rikandi";
 
for( $i= 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
       echo "$depan $belakang<br>";
       

    } elseif ($i % 3 === 0 ) {
        echo "$depan <br>";

     } elseif ($i % 5 === 0) {
        echo "$belakang<br>";

     } else {
        echo "$i <br>";
     }
}