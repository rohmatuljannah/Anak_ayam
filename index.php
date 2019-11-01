<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anak ayam</title>
    <style>
    .ganjil{
        color:orange;
    }
    .genap{
        color:blue;
    }
    </style>
</head>
<body>
    
    <p class="ganjil">Teks orange untuk nilai ganjil</p>
    <p class="genap"> Teks biru untuk nilai genap</p>

<?php
    //Variabel anak_ayam untuk menempatkan nilai int
    $anak_ayam=3;
    //Menampilkan teks ke layar dan memanggil variabel $anak_ayam
    echo "Tek-kotek kotek kotek anak ayam turun : $anak_ayam <br>";
    //Perulangan nilai $i adalah nilai $anak_ayam - 1, $i >= 0, secara increment
    for($i= $anak_ayam - 1;$i>=0; $i--){
        //memeriksa jika anak_ayam bernilai ganjil dan berwarna orange
        if ($i %2 == 1){ 
            echo '<p class="ganjil">Mati satu tinggal : ' . $i . '</p>';
        //memeriksa jika anak_ayam habis
        }else if ($i == 0){ 
            echo "Mati satu habis semua T_T hiks";
        //Memeriksa anak ayam yang bernilai genap dan berwarna biru
        }else{
             echo '<p class="genap">Mati satu tinggal : ' . $i . '</p>';
        }
    }
?>
</body>
</html>