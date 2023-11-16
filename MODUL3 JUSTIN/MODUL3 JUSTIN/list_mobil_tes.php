<?php
    $conn = mysqli_connect("localhost", "root", "", "modul3_wad");
    $result = mysqli_query($conn, "SELECT * FROM showroom_mobil");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>
    <table>
        <tr>
                        <th>Id</th>
                        <th>Nama Mobil</th>
                        <th>Brand Mobil</th>
                        <th>Warna Mobil</th>
                        <th>Tipe Mobil</th>
                        <th>Harga Mobil</th>
                        <th>Detail</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo '<td><img src="' . $row['foto_album'] . '" alt="" width="100px" height="100px"></td>';
            echo "<td>" . $row['judul'] . "</td>";
            echo "<td>" . $row['penyanyi'] . "</td>";
            echo "<td>" . $row['album'] . "</td>";
            echo "<td>" . $row['tahun'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <div style="text-align: center;">
        <button onclick="bukaHalamanTambah()" class="btn btn-primary">Tambah Data</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        function bukaHalamanTambah() {
            window.location.href = "3.php"; // Ganti dengan URL halaman yang ingin Anda tuju.
        }
    </script>

</center>
</body>
</html>
