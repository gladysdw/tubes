  <?php
    require_once('koneksi.php');
         
        $id_post=$_POST['id_post'];
        $title=$_POST['title'];
        $content=$_POST['content'];

    $update = "UPDATE post_ SET title = '$title', content = '$content' WHERE id_post ='$id_post'";

    if ($conn->query($update)===TRUE) {
       echo "Berhasil diperbarui";
    } else {
        echo "Gagal memperbarui";
    }
    $conn->close();
    header('location:home.php');
    exit;
  ?>