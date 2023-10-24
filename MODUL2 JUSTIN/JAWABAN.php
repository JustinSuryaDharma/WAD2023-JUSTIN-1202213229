<?php
$bmi_message="";
if($_POST){
    //No 1 tangkap nilai tinggi_badan dan berat_badan yang ada pada form html
    $tinggi=$_POST["tinggi_badan"];
    $berat=$_POST["berat_badan"];
    //No 2 buatkanlah perkondisian di mana Jika kesalahan Error-nya "empty",
    
    if($tinggi==null||$berat==null){
        $bmi_message="Tinggi badan dan berat badan tidak boleh kosong";
    }
    else{
        //NO 3 masukkan perhitungan BMI sesuai tabel
        $tinggi_m=$tinggi/100;
        $bmi=$berat/($tinggi_m**2);
        
        if($bmi<=18.4){
            $bmi_message= "BMI anda Underweight";
        }
        elseif($bmi>18.4 && $bmi<25){
            $bmi_message= "BMI anda Normal";
        }
        elseif($bmi>=25 && $bmi<40){
            $bmi_message= "BMI anda Overweight";
        }
        else{
            $bmi_message= "BMI anda Obese";
        }
    }
}                    
?>
 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator BMI</title>
    <link rel="stylesheet" href="css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 p-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Kalkulator BMI</h4>
                    <form action="" method="POST">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="tinggi_badan" id="tinggi_badan" placeholder="175">
                            <label for="tinggi_badan">Tinggi Badan (CM)</label>
                        </div>
                        <div class="form-floating">
                            <input type="number" class="form-control" name="berat_badan" id="berat_badan" placeholder="53">
                            <label for="berat_badan">Berat Badan (KG)</label>
                        </div>
                        <button type="submit" class="btn btn-primary mb-3 mt-3 w-100">Hitung BMI</button>
                    </form>


                    <!-- No 4 dan 5 Hasilnya perhitungan BMI dan Hasil pesan error -->
                    <?php
                    echo $bmi_message;
                    ?>


                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>