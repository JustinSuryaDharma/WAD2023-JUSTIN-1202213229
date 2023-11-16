<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
$conn= mysqli_connect('localhost','root','','modul3_wad');
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
if ($_GET){
    $id=$_GET['id'];
    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter
        function update($conn,){
        // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
        $id=$_GET['id'];
        $nama_mobil=$_POST["nama_mobil"];
        $brand_mobil=$_POST["brand_mobil"];
        $warna_mobil=$_POST["warna_mobil"];
        $tipe_mobil=$_POST["tipe_mobil"];
        $harga_mobil=$_POST["harga_mobil"];
        // Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil
        $query="UPDATE showroom_mobil SET nama_mobil='$nama_mobil', brand_mobil='$brand_mobil', warna_mobil='$warna_mobil', tipe_mobil='$tipe_mobil', harga_mobil=$harga_mobil WHERE id=$id ";
        // Eksekusi perintah SQL
        $sql=mysqli_query($conn,$query);
        // Buatkan kondisi jika eksekusi query berhasil
        if($sql){
            echo "<script>alert('Data berhasil diubah')</script>";
            echo "<script>window.location.href = 'list_mobil.php'</script>";
        }
        // Jika terdapat kesalahan, buatkan eksekusi query gagalnya
        else{
            echo "<script>alert('Data gagal diubah')</script>";
            echo "<script>window.location.href = 'list_mobil.php'</script>";
        }
        }
    // Panggil fungsi update dengan data yang sesuai
        update($conn);
// Tutup koneksi ke database setelah selesai menggunakan database
mysqli_close($conn);
}
?>