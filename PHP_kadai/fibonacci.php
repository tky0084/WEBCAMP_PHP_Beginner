<?php
$a = 1;
$b = 0;
$c = 0;

echo "0 \n";

while( $c < 10000 ) {
 $c = ( $a + $b );
 
 echo "{$c} \n";
 
 $a = $b;
 $b = $c;
}