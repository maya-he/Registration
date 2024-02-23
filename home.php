<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <h2>Welcome to the Home Page!</h2>
    <p>This is the home page content.</p>
    <p><a href="login.html">Logout</a></p>
  </div>
  <?php
  echo "hello" .$_SESSION['email'];

?>
</body>
</html>
