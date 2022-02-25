<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>CW4</h1>
<pre>
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
countWords("tinni titli tinni Tinni shaike");

echo "<br>";
echo "Exercise 6: Fucntion";
echo "<br>";


function remove_char($sentence, $remove){
    $chars = str_split($sentence);
    $ans ="";
    foreach($chars as $i){
        if($i!=$remove){$ans=$ans.$i;}
    }
    echo "<br>";
    return  $ans;


}
echo "<br>";
echo "Given: hello open your boo, remove = o ";
echo remove_char("hello open your book", "o");
?>
</pre>
</body>

</html>