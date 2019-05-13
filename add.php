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

    <title>Add Curhatan</title>

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
          <a class="blog-nav-item" href="home.php">Home</a>
         <a class="blog-nav-item navbar-right" href="logout.php">Log Out</a> 
         <a class="blog-nav-item navbar-right active" href="add.php">Mau curhat? Right Here!</a>
        </nav>
      </div>
    </div>
    
    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">Yuk,Curhat!</h1>
        <p class="lead blog-description">Keluarkan isi hatimu disini :)</p>
      </div>

      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Right Hereeee</h1>

<div class="column">
            <form action="" method="post">
              <table>
                <tr>
                  <td> Dari :</td>
                  <td><input type="text" name="title"><br></td>
                </tr>
                <tr>
                   <td> Isi Curhatan :</td>
                   <td><br><br><textarea name="content" row="900" col="600"></textarea><br></td>
                </tr>
                  <tr>
                   <td><br><input type="submit" name="Save"></td><br><br><br>
                    </tr>
            </form>
          </table>
      <?php
    include("koneksi.php");
    $conn = mysqli_connect("sql108.epizy.com", "epiz_23895109", "46H0J0Bz", "epiz_23895109_ycdys");
    
    if($_SERVER['REQUEST_METHOD']=='POST'){

    $simpan = mysqli_query($conn,"INSERT INTO post_ (id_post,title,content) VALUES(null,'$_POST[title]','$_POST[content]') ");

    if ($simpan) {
       echo "New record created successfully";
       header("location:homeuser.php");
    } else {
        echo " gagal menambahkan curhatan" ;
      }
    }
    ?>
        </div>
      </div>
    </div><!-- /.container -->

    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
  </body>
</html>
