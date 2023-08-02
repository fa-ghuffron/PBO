<?php
//class persegi
class persegi{
    var $sisi;
    var $hasil;
    
    function luas($sisi){
        $hasil = $sisi * $sisi;
        
        return "hasil luas persegi= ".$hasil."<br>";
    }
    
    function keliling($sisi){
        $hasil = $sisi * 4;
        
        return "hasil keliling persegi= ".$hasil."<br>";
    }
}

//class persegi panjang
class persegi_panjang{
    var $panjang;
    var $lebar;
    var $hasil;
    
    function luas($panjang, $lebar){
        $hasil = $panjang * $lebar;
        
        return "hasil luas persegi_panjang= ".$hasil."<br>";
    }
    
    function keliling($panjang, $lebar){
        $hasil = $panjang * 2 + $lebar * 2;
        
        return "hasil keliling persegi_panjang= ".$hasil."<br>";
    }
}

//class segitiga
class segitiga{
    var $tinggi;
    var $alas;
    var $sisi1;
    var $sisi2;
    var $sisi3;
    var $hasil;
    
    function luas($alas, $tinggi){
        $hasil = 1/2 * $alas * $tinggi;
        
        return "hasil luas segitiga = ".$hasil."<br>";
    }
    
    function keliling($sisi1 , $sisi2 , $sisi3){
        $hasil = $sisi1 + $sisi2 + $sisi3;
        
        return "hasil keliling segitiga= ".$hasil."<br>";
    }
}

if(isset($_POST['submit_persegi'])){
    // Create object
    $persegi = new persegi();
    
    // Get input value
    $sisi_persegi = $_POST['sisi_persegi'];
    
    // Calculate result
    $luas_persegi = $persegi->luas($sisi_persegi);
    $keliling_persegi = $persegi->keliling($sisi_persegi);
}

// Process form data for Persegi Panjang
if(isset($_POST['submit_persegi_panjang'])){
    // Create object
    $persegi_panjang = new persegi_panjang();
    
    // Get input values
    $panjang_persegi_panjang = $_POST['panjang_persegi_panjang'];
    $lebar_persegi_panjang = $_POST['lebar_persegi_panjang'];
    
    // Calculate result
    $luas_persegi_panjang = $persegi_panjang->luas($panjang_persegi_panjang, $lebar_persegi_panjang);
    $keliling_persegi_panjang = $persegi_panjang->keliling($panjang_persegi_panjang, $lebar_persegi_panjang);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Persegi</title>
</head>
<body>
    <h2>Persegi</h2>
    <form action="" method="post">
        Input sisi: <input type="number" name="sisi_persegi">
        <input type="submit" name="luas_persegi" value="Hitung Luas">
        <input type="submit" name="keliling_persegi" value="Hitung Keliling">
    </form>

    <?php
    if(isset($_POST['luas_persegi'])){
        $sisi = $_POST['sisi_persegi'];
        $persegi = new persegi();
        $result = $persegi->luas($sisi);
        echo $result;
    }

    if(isset($_POST['keliling_persegi'])){
        $sisi = $_POST['sisi_persegi'];
        $persegi = new persegi();
        $result = $persegi->keliling($sisi);
        echo $result;
    }
    ?>
    
    <h2>Persegi Panjang</h2>
    <form action="" method="post">
        Input panjang: <input type="number" name="panjang_persegi_panjang">
        Input lebar: <input type="number" name="lebar_persegi_panjang">
        <input type="submit" name="luas_persegi_panjang" value="Hitung Luas">
        <input type="submit" name="keliling_persegi_panjang" value="Hitung Keliling">
    </form>

    <?php
    if(isset($_POST['luas_persegi_panjang'])){
        $panjang = $_POST['panjang_persegi_panjang'];
        $lebar = $_POST['lebar_persegi_panjang'];
        $persegi_panjang = new persegi_panjang();
        $result = $persegi_panjang->luas($panjang, $lebar);
        echo $result;
    }

    if(isset($_POST['keliling_persegi_panjang'])){
        $panjang = $_POST['panjang_persegi_panjang'];
        $lebar = $_POST['lebar_persegi_panjang'];
        $persegi_panjang = new persegi_panjang();
        $result = $persegi_panjang->keliling($panjang, $lebar);
        echo $result;
    }
    ?>

    <h2>Segitiga</h2>
    <form action="" method="post">
        Input alas: <input type="number" name="alas_segitiga">
        Input tinggi: <input type="number" name="tinggi_segitiga">
        <input type="submit" name="luas_segitiga" value="Hitung Luas">
        <br>
        Input sisi 1: <input type="number" name="sisi1_segitiga">
        Input sisi 2: <input type="number" name="sisi2_segitiga">
        Input sisi 3: <input type="number" name="sisi3_segitiga">
        <input type="submit" name="keliling_segitiga" value="Hitung Keliling">
    </form>

    <?php
    if(isset($_POST['luas_segitiga'])){
        $alas = $_POST['alas_segitiga'];
        $tinggi = $_POST['tinggi_segitiga'];
        $segitiga = new segitiga();
        $result = $segitiga->luas($alas, $tinggi);
        echo $result;
    }

    if(isset($_POST['keliling_segitiga'])){
        $sisi1 = $_POST['sisi1_segitiga'];
        $sisi2 = $_POST['sisi2_segitiga'];
        $sisi3 = $_POST['sisi3_segitiga'];
        $segitiga = new segitiga();
        $result = $segitiga->keliling($sisi1, $sisi2, $sisi3);
        echo $result;
    }
    ?>
</body>
</html>