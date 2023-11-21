<!doctype html>
	<html lang="tr">
		<head>
			<meta charset="utf-8">
			<meta name="description" content="Dodge">
			<meta name="author" content="Emir Toprak">
			<meta name="keywords" content="car, araba, dodge, charger, challenger, viper">

			<title>Dodge - Giriş Yap</title>
			<link rel="stylesheet" href="css/font-awesome.css" />
			<link rel="stylesheet" type="text/css" href="css/reset.css">
			<link rel="stylesheet" type="text/css" href="css/main.css">
		</head>
		<body>    
			
            <?php include("ust.php");?>
			<br><br><br><br><br><br><br>
				<div class="iletisimOrta">
					<div class="konteyner">
						<div class="paket">
							<form class="iletisimForm" action="yoneticiPHP/girisKontrol.php" method="POST">
								<div class="formMadde">
									<span class="formSekil"><i class="fa fa-user fa-2x"></i></span>
									<input class="formAlanı" type="text" name="kullanici_adi" placeholder="Kullanıcı Adı" required>
								</div>
								<div class="formMadde">
									<span class="formSekil"><i class="fa fa-lock fa-2x"></i></span>
									<input class="formAlanı" type="password" name="parola" placeholder="Parola" required>
								</div>
								<div class="formMadde">
									<input class="formButon" type="submit" name="buton" value="Giriş Yap">
								</div>
								
							</form>
							
						</div>
					</div>
				</div>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br>


			<?php include("alt.php");?>

		</body>
	</html>

