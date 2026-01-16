<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Tutorial</title>
</head>
<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  .container{
    max-width: 80%;
    margin: auto;
    background-color: #1d8a86;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 2px 2px 12px rgba(0,0,0,0.1);
    font-family: Arial, sans-serif;
  }
</style>
<body>
  <div class="container">
    <h1>Let's learn about PHP.</h1>
     <p>Your voting status is here:</p>
    <?php
    $age = 34;
    if ($age > 18) {
      echo "You are eligible to vote.";
    }
    else if ($age == 18) {
      echo "You just became eligible to vote this year.";
    }
    else {
      echo "You are not eligible to vote.";
    }
    echo "<br>";
    // Arrays in PHP
    $language = array("Python", "JavaScript", "PHP", "Java", "C++");
    echo $language[2]; // Outputs: PHP
    echo "<br>";
    // Looping through an array/ iterating an array/ Loops in PHP.
    $a = 0;
    while ($a <= 10) {
      echo "The value of a is: ";
      echo $a;
      echo "<br>";
      $a++;
    }
    $a = 0;
    while ($a < count($language)) {
      echo "The language is: ";
      echo $language[$a];
      echo "<br>";
      $a++;
    }
    // do-while loop in PHP
    $a = 0;
    do {
      echo "The value of a from do-while loop is: ";
      echo $a;
      echo "<br>";
      $a++;
    } while ($a < 5);
    echo "<br>";

    // for loop in PHP
    for ($a=0; $a < 10; $a++) { 
      echo "The value of a from for loop is: ";
      echo $a;
      echo "<br>";
    }
    echo "<br>";
    // foreach loop in PHP
    foreach ($language as $lang) {
      echo "The language from foreach loop is: ";
      echo $lang;
      echo "<br>";
    }
echo "<br>";
    // Functions in PHP
    function print5() {
      echo "Five<br>";
    }
    print5();
    print5();

    echo "<br>";
    function print_number($number) {
      echo "The number is: ";
      echo $number;
      echo "<br>";
    }
    print_number(45);
    print_number(78);
    print_number(12);
    ?>
  </div>
</body>
</html>