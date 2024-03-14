<?php
// Inside Faculty_page.php

@include 'config.php';

session_start();

if (!isset($_SESSION['Faculty_name'])) {
   header('location:login_form.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Faculty page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container">
   <div class="content">
      <h3>Hi, <span>Faculty</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['Faculty_name'] ?></span></h1>
      <p>This is an Faculty page</p>
      <a href="logout.php" class="btn">Logout</a>
      <br>
      <br>
      <a href="view_users.php" class="btn">Upload Marks</a>
      <br>
      <br>
      <a href="user_info.php" class="btn">View Result</a>
   </div>
</div>

</body>
</html>
