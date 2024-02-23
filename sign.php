<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <h2>Sign Up</h2>
    <form method="post">
      <input type="text" placeholder="Username" name="username" >
      <input type="email" placeholder="Email" name="email">
      <input type="number" placeholder="Age" name="age">
      <input type="password" placeholder="Password" name="password">
      <button type="submit" name="submit">Sign Up</button>
    </form>
    <p>Already a member? <a href="login.html">Login</a></p>
  </div>
</body>
<?php
include('config.php');

// print_r($_POST);

if (isset($_POST['submit'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $age = $_POST['age'];
  $password = $_POST['password'];
}


// sql query 
$sql = "SELECT email FROM users WHERE email ='$email'";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result) != 0){
  echo "this email is already taken";
}else{
  $sql2 = "INSERT INTO users(username,email,age,password) VALUES('$username','$email','$age','$password')";
  mysqli_query($con,$sql2);
}



?>
</html>
