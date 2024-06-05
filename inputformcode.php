<?php
$regiok = false;
$reginot = false;
$name = $_POST['name'];
//echo $firstname."<br>";
$email = $_POST['email'];
//echo $email."<br>";

$suggestion = $_POST['textarea'];
//echo $password2."<br>";

$conn = mysqli_connect("localhost", "root", "", "inotes");

$ins = "INSERT INTO `comment` (`name`, `email`, `suggestion`, `date`) VALUES ( '$name', '$email', '$suggestion', current_timestamp())";

//$ins=mysqli_query($conn , $sql);

if ($name && $email && $suggestion) {
  mysqli_query($conn, $ins);
  header("location:index.php");
  $regiok = true;
} else {
  $reginot = true;
}
