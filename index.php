<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
   

    <title>Yuk, Curhat!</title>

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
          <a class="blog-nav-item active" href="index.php">Home</a>
          <a class="blog-nav-item" href="login.php">Sign in</a>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">Yuk,Curhat!</h1>
        <p class="lead blog-description">Keluarkan isi hatimu disini :)</p>
        <h2 class="blog-post-title">~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~</h2>
      </div>
      <div class="row">

      <?php
        $servername = "sql108.epizy.com";
        $username = "epiz_23895109";
        $password = "46H0J0Bz";
        $dbname = "epiz_23895109_ycdys";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
         


        $sql = "SELECT * FROM post_";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              echo "<br>"." ".$row["waktu"]."<br>";
                              echo "<strong>Dari : ". substr($row["title"], 0,1000)."</strong><br>";
                              echo "<strong>Isi curhatan : " . substr($row["content"], 0,1000)."</strong><br>";
        }
        }
        $conn->close();
        ?>
        
</div><!-- /.container -->

<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Halo! Saya Gladys, Ini adalah tugas pemrograman web 2 saya. Saya membuat <em>Yuk, Curhat!</em> karena terinprasi dari Official Account Line Curhat Anak Unsri:)</p>
          </div>
        </div>
        </div>

    
      

    <div class="blog-footer">
      <p>Yuk, Curhat! by<a href="http://www.instagram.com/gladysdw">@gladysdw</a>.</p>
      <p>
        <a href="index.php">Back to top</a>
      </p>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
  </body>
</html>
