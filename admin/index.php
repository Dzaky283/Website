<?php

include 'koneksi.php';

session_start();

error_reporting(0);


if (isset($_POST['login'])) {
  	$username = $_POST['username'];
	  $password = md5($_POST['password']);

  	$sql = "SELECT * FROM data WHERE username='$username' AND password='$password'";
  	$result = mysqli_query($koneksi, $sql);
	  if ($result->num_rows > 0) {
	  	$row = mysqli_fetch_assoc($result);
		  $_SESSION['username'] = $row['username'];
		  header("location:index_1.php");
	  }else{
		  echo "<script>alert('Woops! Email Atau Password anda Salah.')</script>";
	  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

  <div class="wrapper">
    <div class="form-wrapper sign-in">
      <form action="" method="POST">
        <h2>Login Admin</h2>
        <div class="input-group">
          <input type="text" name="username" value="<?php echo $username; ?>" required>
          <label for="">Username</label>
        </div>
        <div class="input-group">
          <input type="password" name="password" value="<?php echo $_POST['password']; ?>" required>
          <label for="">Password</label>
        </div>
        <div class="remember">
          <label><input type="checkbox" name="ingat"> Remember me</label>
        </div>
        <button type="submit" name="login">Login</button>
      </form>
    </div>


  <script src="script.js"></script>
</body>

</html>