<?php
session_start();

//Initialising variables
$email = "";
$errors = array();

// connect to the database
include("db.php");

// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (count($errors) == 0) {
    $login_query = "SELECT * FROM users WHERE email = '$email'";
    $results = mysqli_query($conn, $login_query);
    $users = mysqli_fetch_assoc($results);
    if (mysqli_num_rows($results) == 1) {
      if ($password == $users['password']){
        $_SESSION['email'] = $email;
        header("location: home.php");
      }else {
        array_push($errors, "Password do not match!");
      }
    }else {
      array_push($errors, "Invalid Credentials! Try again!");
    }
  }
}

?>