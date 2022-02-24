<?php
echo "Exercise 1: Function";
echo "<br>";
echo "<br>";
function f1() {
  echo "Hello world!";
}
f1();
echo "<br>";
echo "Exercise 2: Loops";
echo "<br>";
echo "<br>";
for ($x = 0; $x <5; $x++) {
    for ($j =0 ; $j <= $x; $j++) {
        echo "*";  
    }
    echo "<br>";
}
echo "<br>";
echo "Exercise 3: Fucntion";
echo "<br>";
echo "<br>";

function f2($parameter) {
    for ($i = 0; $i <$parameter; $i++) {
        for ($j =0 ; $j <= $i; $j++) {
            echo "*";  
        }
        echo "<br>";
    }
}
f2(6);







?>