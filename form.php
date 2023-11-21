<!doctype html>
	<html lang="tr">
		<head>
			<meta charset="utf-8">
			<meta name="description" content="Dodge">
			<meta name="author" content="Emir Toprak">
			<meta name="keywords" content="car, araba, dodge, charger, challenger, viper">

			<title>Dodge - Durango</title>
			<link rel="stylesheet" href="css/font-awesome.css" />
			<link rel="stylesheet" type="text/css" href="css/reset.css">
			<link rel="stylesheet" type="text/css" href="css/main.css">
		</head>
		<body>    
            <?php include("ust.php");?>
            <section id="iletisim" class="bolumAlani">
				<div class="iletisimUst">
					<h2 class="bolumBaslik">BİZE ULAŞIN</h2>
					<p>Dodge performans arabaları ile güç senin elinde.</p>
				</div>
				<div class="iletisimOrta">
					<div class="konteyner">
						<div class="paket">
							<form class="iletisimForm" action="yoneticiPHP/kaydet.php" method="POST">
								<div class="formMadde">
									<span class="formSekil"><i class="fa fa-user fa-2x"></i></span>
									<input class="formAlanı" type="text" name="adsoyad" placeholder="Ad Soyad" required>
								</div>
								<div class="formMadde">
									<span class="formSekil"><i class="fa fa-envelope fa-2x"></i></span>
									<input class="formAlanı" type="email" name="email" placeholder="email" required>
								</div>
								<div class="formMadde">
									<span class="formSekil"><i class="fa fa-mobile-phone fa-2x"></i></span>
									<input class="formAlanı" type="text" name="telefon" placeholder="Telefon" >
								</div>
								<div class="formMadde">
									<span class="formSekil"><i class="fa fa-info fa-2x"></i></span>
									<input class="formAlanı" type="text" name="konu"  placeholder="Konu" required>
								</div>
								<div class="formMadde">
									<span class="formSekil"><i class="fa fa-comment fa-2x"></i></span>
									<textarea class="formAlanı" name="mesaj" rows="8" placeholder="Mesaj"></textarea>
								</div>
								<div class="formMadde">
									<input class="formButon" type="submit" name="buton" value="Gönder">
								</div>
							</form>
							
						</div>
					</div>
				</div>
			</section>

			<!-- Altbilgi Alanı -->

			<?php include("alt.php")?>

		</body>
	</html>

