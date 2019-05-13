<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <title>Sign Up</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style>
.error {color: skyblue;}
body{
  background: url(iya.jpg);
  background-size: 1500px 900px;
}
</style>
  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item " href="index.php">Home</a>
          <a class="blog-nav-item active" href="login.php">Login</a>
        </nav>
      </div>
    </div>

<form action="actionregis.php" method="post">
  
<?php
// define variables and set to empty values
$levelErr = $nameErr = $passErr = $emailErr = $genderErr = "";
$level = $username = $password  = $email = $gender = "";

date_default_timezone_set('Asia/Jakarta');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["level"])) {
    $levelErr = "Level is required";
  } else {
    $level = test_input($_POST["level"]);
  }

  if (empty($_POST["username"])) {
    $nameErr = "username is required";
  } else {
    $username = test_input($_POST["username"]);
    // check if username only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
   
  if (empty($_POST["password"])) {
    $passErr = "password is required";
  } else {
    $nim = test_input($_POST["password"]);
    if (!preg_match("/^[0-9 ]*$/",$password)) {
      $nimErr = "Only Numbers allowed"; 
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2> Form Data </h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<table width="50%" align="left" cellspacing="1" cellpadding="5">
  <tr>
   <td>Peran</td>
   <td>:<form action="/action_page.php">
  <select name="level">
    <option value="">-Silahkan Pilih-</option>
     <option value="User">User</option>
     <option value="Admin">Admin</option>

  </select>
  <span class="error">* <?php echo $levelErr;?></span></td>
  </tr>
  <tr>
   <td>Username</td>
   <td>:<input type="text" name="username" value="<?php echo $username;?>">
  <span class="error">* <?php echo $nameErr;?></span></td>
  </tr>
  <tr>
   <td>Password</td>
   <td>:<input type="password" name="password">
   <span class="error">* <?php echo $passErr;?> </span>
  </tr>
   <td>E-mail</td>
   <td>:<input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span></td>
  </tr>
   <td>Gender</td>
   <td>:
  <input type="radio" name="gender" value="Laki - Laki">Laki-Laki
  <input type="radio" name="gender" value="Perempuan">Perempuan
  <span class="error">* <?php echo $genderErr;?></span>
   </td>
  </tr>
  <tr>
   <td colspan="2"><input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="reset">
   </td>
  </tr>
</table>

</form>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
  </body>
</html>
