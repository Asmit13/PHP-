<?php

$str = "Hello, World! <br>";
echo $str;
$lenn = strlen($str);
echo "The length of the string is : " . $lenn . ". Thank you! <br>"; // concatenation in PHP
echo "The number of words in the string is : " . str_word_count($str) . ". Thank you! <br>"; // word count in PHP
echo "The reverse of the string is : " . strrev($str) . ". Thank you! <br>"; // string reverse in PHP
echo "The position of 'World' in the string is : " . strpos($str, "World") . ". Thank you! <br>"; // string position in PHP
echo "The string after replacing 'World' with 'PHP' is : " . str_replace("World", "PHP", $str) . ". Thank you! <br>"; // string replace in PHP
// echo $lenn;
echo "<br>";
?>