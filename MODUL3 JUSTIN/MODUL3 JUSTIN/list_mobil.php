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

            <?php
            include("connect.php");
            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
            $ambil=mysqli_query($conn,"SELECT * FROM showroom_mobil");
            ?>
            
            

            <!-- // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan dalam bentuk tabel 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel' -->

            <!--  **********************  1  **************************     -->
            <div>
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
                    while ($rows=mysqli_fetch_assoc($ambil)){


                        echo "<tr>";
                        echo "<td>" . $rows["id"] . "</td>";
                        echo "<td>" . $rows["nama_mobil"] . "</td>";
                        echo "<td>" . $rows["brand_mobil"] . "</td>";
                        echo "<td>" . $rows["warna_mobil"] . "</td>";
                        echo "<td>" . $rows["tipe_mobil"] . "</td>";
                        echo "<td>" . $rows["harga_mobil"] . "</td>";
                        echo '<td><a href="form_detail_mobil.php?id=' . $rows['id'] . '">Detail</a></td>';
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>

            
            







            <!--  **********************  1  **************************     -->

            <!--  **********************  2  **************************     -->

            
            

            
            
            <!--  **********************  2  **************************     -->
            
        </div>
    </center>
</body>
</html>
