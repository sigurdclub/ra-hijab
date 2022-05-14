<?php 
date_default_timezone_set("Asia/makassar");
//koneksi ke database
$conn=mysqli_connect("localhost","root","", "hijab_db");

if(!isset($conn)){
    echo "koneksi gagal!!!";
}


// function upload(){
//   $nama_file = $_FILES['gambar']['name'];
//   $tipe_file = $_FILES['gambar']['type'];
//   $ukuran_file = $_FILES['gambar']['size'];
//   $tmp_file =$_FILES['gambar']['tmp_name'];

//   $ext=pathinfo($nama_file,PATHINFO_EXTENSION);
//   $nama_file_baru = uniqid().'.'.$ext;
//   //cek tipe file
//   if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
    
//     $folder =__DIR__."/img/".$nama_file_baru ;
//     //upload jika lolos pengecekan
//     move_uploaded_file($tmp_file, $folder);
//   }

//   return $nama_file_baru;
// }


function tambahproduct($data){
  global $conn;
  $hijab=$data["merek_hijab"];
  $warna=$data["warna"];
  $stok=$data["stok"];
  $tipe=$data["tipe"];
  $harga=$data["harga"];

  $nama_file = $_FILES['gambar']['name'];
  $tipe_file = $_FILES['gambar']['type'];
  $ukuran_file = $_FILES['gambar']['size'];
  $tmp_file =$_FILES['gambar']['tmp_name'];

  $ext=pathinfo($nama_file,PATHINFO_EXTENSION);
  $nama_file_baru = uniqid().'.'.$ext;
  //cek tipe file
  if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
    
    $folder =__DIR__."/img/".$nama_file_baru ;
    //upload jika lolos pengecekan
    move_uploaded_file($tmp_file, $folder);
  }
  
  $query="INSERT INTO daftarhijab VALUES ('','$hijab','$warna', '$stok', '$tipe', '$harga', '$nama_file_baru')";
  mysqli_query($conn,$query);//jalankan query
  return $query;
}

function update($data){
  global $conn;
  $id=$_POST["id"];
  $hijab=$data["merek_hijab"];
  $warna=$data["warna"];
  $stok=$data["stok"];
  $tipe=$data["tipe"];
  $harga=$data["harga"];

  $nama_file = $_FILES['gambar']['name'];
  $tipe_file = $_FILES['gambar']['type'];
  $ukuran_file = $_FILES['gambar']['size'];
  $tmp_file =$_FILES['gambar']['tmp_name'];

  $ext=pathinfo($nama_file,PATHINFO_EXTENSION);
  $nama_file_baru = uniqid().'.'.$ext;
  //cek tipe file
  if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
    
    $folder =__DIR__."/img/".$nama_file_baru ;
    //upload jika lolos pengecekan
    move_uploaded_file($tmp_file, $folder);
  }
  //  var_dump($nama_file_baru);die;
  $query="UPDATE daftarhijab SET merek_hijab='$hijab', warna='$warna', stok='$stok', tipe='$tipe', harga='$harga', gambar='$nama_file_baru' WHERE id=$id ";

  mysqli_query($conn,$query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapus($id){
  global $conn;
  $id = htmlspecialchars($_GET["id"]);
  $file=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM daftarhijab WHERE id=$id "));
  $gambar = $file["gambar"];
  
  if(file_exists("../img/$gambar")){
    unlink('../img/'.$gambar);
    
    $query = "DELETE FROM daftarhijab WHERE id=$id ";
    // var_dump($query);die;
    mysqli_query($conn,$query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
  }
  
}

function pesan($data){
  global $conn;

  $tanggal=date('Y/m/d H:i:s');
  $harga=$_GET["harga"];
  $hijab=$_GET["hijab"];
  $nama     = htmlspecialchars( $data["nama_pemesan"] );
  $warna  = htmlspecialchars( $data["warna"] );
  $jumlah  = htmlspecialchars( $data["jumlah"] );
  $total=$jumlah*$harga;
  // var_dump($total);die;
  $query = "INSERT INTO tb_orderan VALUES ('', '$nama', '$hijab', '$warna', '$jumlah', '$total','$tanggal')";
  // var_dump($query);die;
  mysqli_query($conn, $query)or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);


}


?>