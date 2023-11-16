<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
$conn= mysqli_connect('localhost','root','','modul3_wad');
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
    if ($_GET){
        $id=$_GET['id'];
    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil
        $query="DELETE FROM showroom_mobil WHERE id=$id";
    // (4) Buatkan perkondisi jika eksekusi query berhasil
    if(mysqli_query($conn,$query)){
        echo "<script>alert('Data berhasil dihapus')</script>";
        echo "<script>window.location.href = 'list_mobil.php'</script>";
    }    else{
        echo "<script>alert('Data gagal dihapus')</script>";
        echo "<script>window.location.href = 'list_mobil.php'</script>";
    }
// Tutup koneksi ke database setelah selesai menggunakan database
}
mysqli_close($conn);
?>