<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "customerdb";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
   die("Connection failed: " .  mysqli_connect_error());
}
echo "conected";
echo"";

$name =$_POST['name'];
$email =$_POST['email'];
$number =$_POST['number'];

 // using sql to create a data entry query
 $sql = "INSERT INTO customer(name , email, number) 
 VALUES ('$name', '$email', '$number')";
  
 // send query to the database to add values and confirm if successful
 if(mysqli_query($con, $sql))
 {
     echo "Entries added!";
 }else {
  echo "no entry add";
 }

mysqli_close($con);
?>
