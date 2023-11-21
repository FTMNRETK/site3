

<?php


$servername="localhost";
$username="root";
$password="";
$dbname="emirtoprak";
    $baglan= new mysqli ($servername,$username,$password,$dbname);

    if($baglan->connect_error){
        die("Bağlantı hatası");
    }

?>