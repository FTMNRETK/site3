<?php
session_start();
if(@$_SESSION["girisYaptimi"]!=true){
    echo "bu alana girmek için giriş yapınız.<a href='../girisyap.php'Giriş</a>";
    echo "<meta http-equiv ='refresh' content = '2; url = ../girisyap.php'/>";
    exit();
}
?>