<?php
$insert = false;
// Check for form submission
if (isset($_POST['name'])) {
    // Set connection variables
$server = "localhost";
$username = "root";
$password = "";
// create a database connection
$con = mysqli_connect($server, $username, $password);
// Check for connection success
if (!$con) {
    die("Connection to database failed: " . mysqli_connect_error());
}
// echo "Connected to database successfully";


// Collect post variables
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];
$sql =  "INSERT INTO `Trip`.`Trip` (`Name`, `Age`, `Gender`, `Email`, `Phone No.`, `Other info.`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";
//echo $sql;


// Execute the query
if ($con->query($sql) == true) {
    // echo "Successfully inserted";

    // Flag for successful insertion
    $insert = true;
} else {
    echo "ERROR: $sql <br> $con->error";
}
// Close the database connection
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Travel Form</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <img src="bg.jpg" alt="VIT Bhopal Ujjain Trip" class="bg">
  <div class="container">
    <h1>Welcome to VIT Bhopal Ujjain Trip Travel Form.</h1>
    <p>Enter your details and submit this form to confirm your participation in the trip.</p>
    <?php
    if ($insert == true) {
    echo "<p class='submitMsg'>Thank you for submitting the form. We are happy to see you joining us for the Ujjain trip.</p>";
    }
    ?>
    <form action="index.php" method="post">
      <input type="text" name="name" id="name" placeholder="Enter your name" required>
      <input type="text" name="age" id="age" placeholder="Enter your age" required>
      <input type="text" name="gender" id="gender" placeholder="Enter your gender" required>  
      <input type="email" name="email" id="email" placeholder="Enter your email" required>
      <input type="phone" name="phone" id="phone" placeholder="Enter your phone number" required>
      <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here..."></textarea>
      <button class="btn">Submit</button>
      <button class="btn/cancel">Reset</button>
    </form>
  </div>
  <script src="index.js"></script>

 
</body>
</html>