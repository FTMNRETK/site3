
<?php

include("baglan.php");

$id=$_POST["id"];



$sil = "DELETE from mesajlar where $id ";


if ($baglan->query($sil) === TRUE) 
{
  echo "Başarılı bir şekilde silindi.";
}
else 
{
  echo "Hata: " . $baglan->error;
}

?>