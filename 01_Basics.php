<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Tutorial</title>
</head>
<body>
  <div class="container">
    This is a simple PHP tutorial page.
    <?php
      // Display current date and time
      echo "Hello, welcome to the PHP tutorial!";
      echo "<br>";
       ?>
       <?php
       echo "Hi another line added.";
       echo "<br>";
       // single line comment
        /* multi line comment 
        This is a multi-line comment example.
        It can span multiple lines.
        */

        $variable1 = 7;
        $variable2 = 3;
        echo $variable1;
        echo "<br>";
        Echo $variable2; // not case sensitive.
        echo "<br>";
        echo $variable1 + $variable2;
        echo "<br>";


       // Operators in PHP:
       // Arithmetic Operators: +, -, *, /, %
       echo "<br>";
       echo "the value of variable1 + variable2 is ";
        echo $variable1 + $variable2;
        echo "<br>";
        echo "the value of variable1 - variable2 is ";
        echo $variable1 - $variable2;
        echo "<br>";
        echo "the value of variable1 * variable2 is ";
        echo $variable1 * $variable2;
        echo "<br>";
        echo "the value of variable1 / variable2 is ";
        echo $variable1 / $variable2;
        echo "<br>";
       // Assignment Operators: =, +=, -=, *=, /=, %=
       $newVar = $variable1;
        echo "the value of newVar is ";
        echo $newVar;
        echo "<br>";
        $newVar += 5;
        echo "the value of newVar after +=5 is ";
        echo $newVar;
        echo "<br>";
        $newVar -= 2;
        echo "the value of newVar after -=2 is ";
        echo $newVar;
        echo "<br>"; // so onnnnn
       // Comparison Operators: ==, ===, !=, !==, >, <, >=, <=
       echo "the value of 1 == 4 is ";
       echo var_dump(1 == 4);
       echo "<br>";
              echo "the value of 1 != 4 is ";
       echo var_dump(1 != 4);
        echo "<br>";
              echo "the value of 1 >= 4 is ";
       echo var_dump(1 >= 4);
        echo "<br>";
              echo "the value of 1 <= 4 is "; 
        echo var_dump(1 <= 4);
        echo "<br>";

        // Increment/Decrement Operators: ++, --
        echo $variable1++;
        echo "<br>";
        echo $variable1;
        echo "<br>";
        echo $variable1--;
        echo "<br>";
        echo $variable1;
        echo "<br>";
       // Logical Operators: &&, ||, !  
       $newVar = (true) and (true);
       echo var_dump($newVar);
       echo "<br>";
        $newVar = (false) or (true);
        echo var_dump($newVar);
        ?>

        <?php
        // Data Types in PHP:
        // 1. String
        // 2. Integer
        // 3. Float (Double)
        // 4. Boolean
        // 5. Array
        // 6. Object
        // 7. NULL
        echo "<br> DATA TYPES IN PHP <br>";
        $stringVar = "This is a string";
        echo var_dump($stringVar);
        echo "<br>";
        $intVar = 42;
        echo var_dump($intVar);
        echo "<br>";
        $floatVar = 3.14;
        echo var_dump($floatVar);
        echo "<br>";
        $boolVar = true;
        echo var_dump($boolVar);
        echo "<br>";
        $arrayVar = array("apple", "banana", "cherry");
        echo var_dump($arrayVar);
        echo "<br>";

        ?>

        <?php
        // Constants in PHP 
        // define a constant using define() function and on all uppercase letters by convention.
        define("PI", 3.14159);
        echo "The value of the constant PI is: " . PI;

        ?>
  </div>
</body>
</html>