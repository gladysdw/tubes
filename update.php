<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    header('location:index.php');//jika belum login jangan lanjut
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>dys</title>

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
          <a class="blog-nav-item active" href="home.php">Home</a>
          <a class="blog-nav-item" href="login.php">Login</a>
         <a class="blog-nav-item navbar-right" href="logout.php">Log Out</a> 
         <a class="blog-nav-item navbar-right" href="add.php">Mau curhat? Right Here!</a>
        </nav>
      </div>
    </div>
    
    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">Yuk,Curhat!</h1>
        <p class="lead blog-description">Keluarkan isi hatimu disini :)</p>
      </div>
 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Edit Curhatan</h1>
            <div>
            
                <form action="actionupdate.php" method="POST">
              <?php
                require_once('koneksi.php');
                $id_post=$_GET['id_post'];
                $sql = "SELECT * FROM post_ WHERE id_post=$id_post";
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
                ?>
                
                <table>
              <tr>
                <td> Dari   : </td>
                <td>
                <input type="hidden" name="id_post" value="<?php echo $row['id_post']; ?>">
                <input type="text" name="title" value="<?php echo $row['title']; ?>">
              </td>
              </tr>
              
              <tr>
                <td> Isi Curhatan  : </td>
                <td><br><br><textarea type="text" name="content"><?php echo $row['content'];?></textarea></td>
              </tr>
              <tr>
              <td><td><br><br><input type="submit" value="Save"></td></td>
              </tr>
            </table>
            </div>
          </div>   
      </div><?php
          }
        }
        ?>
    </form>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
  </body>
</html>
