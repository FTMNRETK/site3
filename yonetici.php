<!doctype html>
	<html lang="tr">
		<head>
			<meta charset="utf-8">
			<meta name="description" content="Dodge">
			<meta name="author" content="Emir Toprak">
			<meta name="keywords" content="car, araba, dodge, charger, challenger, viper">

			<title>Dodge</title>
			<link rel="stylesheet" href="css/font-awesome.css" />
			<link rel="stylesheet" type="text/css" href="css/reset.css">
			<link rel="stylesheet" type="text/css" href="css/main.css">
		</head>
		<body>

        <?php include("ust.php"); ?>

            <?php

            include("yoneticiPHP/vericek.php");

            if ($sonuc->num_rows > 0) 
            {
            
            while($cek = $sonuc->fetch_assoc()) 
            {

                echo "<div class='iletisimOrta'>
					<div class='konteyner'>
						<div class='paket'>
							<form class='iletisimForm' action='yoneticiPHP/verisil.php' method='POST'>
								<div class='formMadde'>
									<span class='formSekil'><i>ID</i></span>
									<textarea class='formAlanı' type='text' name='id' placeholder='ID' required>".$cek["ID"]."</textarea>
								</div>
								<div class='formMadde'>
									<span class='formSekil'><i class='fa fa-user fa-2x'></i></span>
									<textarea class='formAlanı' type='text' name='adsoyad' placeholder='Ad Soyad' required>".$cek["ADSOYAD"]."</textarea>
								</div>
								<div class='formMadde'>
									<span class='formSekil'><i class='fa fa-envelope fa-2x'></i></span>
									<textarea class='formAlanı' type='email' name='email' placeholder='Mail' required>".$cek["MAIL"]."</textarea>
								</div>
								<div class='formMadde'>
									<span class='formSekil'><i class='fa fa-mobile-phone fa-2x'></i></span>
									<textarea class='formAlanı' type='text' name='telefon' placeholder='Telefon' >".$cek["TELEFON"]."</textarea>
								</div>
								<div class='formMadde'>
									<span class='formSekil'><i class='fa fa-info fa-2x'></i></span>
									<textarea class='formAlanı' type='text' name='konu'  placeholder='Konu' required>".$cek["KONU"]."</textarea>
								</div>
								<div class='formMadde'>
									<span class='formSekil'><i class='fa fa-comment fa-2x'></i></span>
									<textarea class='formAlanı' name='mesaj' rows='8' placeholder='Mesaj'>".$cek["MESAJ"]."</textarea>
								</div>
								<div class='formMadde'>
									<input class='formButon' type='submit' name='buton' value='Sil'>
								</div>
								
							</form>
							
						</div>
					</div>
				</div>  <br><br>";

                }
            } 
            else 
            {
            echo "Sonuç Bulunamadı.";
            }
                ?>

        <?php include("alt.php")?>

</body>
</html>