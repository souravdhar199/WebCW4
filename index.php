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
f2(10);
echo "<br>";
echo "Exercise 4: Fucntion";
echo "<br>";
echo "<br>";

function word_count($string) {
    return str_word_count($string);
}
echo word_count("Hello how are you!");

echo "<br>";
echo "Exercise 5: Fucntion";
echo "<br>";
echo "<br>";
function countWords($data) {
    $arrayWords = explode(" ", $data);
    $numberOfOccurance = array_count_values(array_map("strtoupper", $arrayWords));
    print_r($numberOfOccurance);
}
countWords("Hello hello Hello hello name cat");



?>