
<?php

include("baglan.php");

$name=$_POST["adsoyad"];
$email=$_POST["email"];
$telefon=$_POST["telefon"];
$konu=$_POST["konu"];
$mesaj=$_POST["mesaj"];

$sql="INSERT INTO mesajlar ( ADSOYAD, MAIL, TELEFON, KONU, MESAJ) VALUES (' $name',' $email',' $telefon',' $konu',' $mesaj')";
            if($baglan->query($sql))
            {
                echo "Mesaj Gönderildi";
            }


?>