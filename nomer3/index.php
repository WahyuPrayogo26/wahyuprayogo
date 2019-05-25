


<?php 

function kota ($nama){
$kota = $nama;
$result = substr_count($kota, "a");
$result1 = substr_count($kota, "i");
$result2 = substr_count($kota, "u");
$result3 = substr_count($kota, "e");
$result4 = substr_count($kota, "o");
$hasil = $result+$result2+$result1+$result3+$result4;
echo "programmer";
echo "<br>";
echo "Maka jumlah huruf hidup pada variable adalah $hasil";

}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <h1><?php echo kota("programmer") ; ?></h1>
 </body>
 </html>
