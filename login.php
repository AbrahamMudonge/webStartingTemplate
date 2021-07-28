<?php
 require_once('connection.php');
 
 if(isset($_POST['login']))
 {
  $email=$_POST['email'];
  $psw=$_POST['psw'];
  $newPassword=md5($psw);

  $sql = mysqli_query($conn, "SELECT * FROM account WHERE email='$email' and psw='$newPassword'");
  $fetch=mysqli_fetch_array($sql);

  if($fetch >0){
    header('location:index.php');

    
  }
  else{
    echo "error";
  }

 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="file:///var/www/html/dashboard/webStartingTemplate/styles/login.css">
    <title>login</title>
</head>
<body>
  <div class="card">
    <h5 class="card-header">Featured</h5>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <form class="form-inline" action="/action_page.php">
        <label for="email">Email:</label>
        <input type="email" id="email" placeholder="Enter email" name="email">
        <label for="pwd">Password:</label>
        <input type="password" id="pwd" placeholder="Enter password" name="pswd">
        <label>
          <input type="checkbox" name="remember"> Remember me
        </label>
        <button type="submit" name="login">login</button>
      </form>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
    
</body>
</html>
