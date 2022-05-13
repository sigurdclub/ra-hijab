<?php
include_once "../function.php";

$id = htmlspecialchars($_GET["id"]);

  if(hapus($_POST) > 0){
    echo "
            <script>
               alert('data berhasil dihapus!');
               document.location.href = 'products.php';
            </script>";
  }else{
    echo "
            <script>
               alert('data gagal dihapus!');
               document.location.href = 'products.php';
            </script>";
  }

?>