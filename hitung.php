
<?php 

if(isset($_GET['angka1']) && $_GET['angka1'] != '') {

    $angka1 = $_GET['angka1'];
    $angka2 = $_GET['angka2'];

    // PENJUMLAHAN
    $penjumlahan = $angka1 + $angka2;
    echo "<p>Penjumlahan = ". $penjumlahan ."</p>";

    // PENGURANGAN
    $pengurangan = $angka1 - $angka2;
    echo "<p>Pengurangan = ". $pengurangan ."</p>";

    // PERKALIAN
    $perkalian = $angka1 * $angka2;
    echo "<p>Perkalian = ". $perkalian ."</p>";

    // PEMBAGIAN
    $pembagian = $angka1 / $angka2;
    echo "<p>Pembagian = ". $pembagian ."</p>";

}


?>