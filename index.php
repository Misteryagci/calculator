<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
		<!-- Sekme yerinde cikan isim browserin dilinde cikmali 
			 turkce,ingilizce,fransizca olarak simdilik.
			 Bunun için php kullanacagiz -->
		<?php
			include 'functions.php'; //Sayfanin geri kalaninda kullanilacak fonksiyonlarin oldugu dosyayi da ekliyoruz.
			echo '<title>';
			/*  Browserin calistigi dil $lang degiskeninde saklaniyor 2 harfli olarak */
			$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
			//Dilleri ayirmak icin switch case yapiyoruz
			switch ($lang){
				case "fr": //Eger browser fransizcaysa
					echo 'Calculette';
					break;
				case "fr": //Eger browser turkceyse
					echo "Hesap makinesi";
					break;
				default: //Fransizca yada Turkce degilse ingilizce gosteriyoruz
					echo "Calculator";
					break;
			}
			echo '</title>';
		?>
		<!-- JQuery ve external JS dosyalarini ekleiyoruz-->
		<script src="../jquery-2.1.4.min.js"></script>
		<script src="main.js"></script>
</head>
<body>
	<!-- Hesap makinasinin ekranini olusturan paragraf JS ile ayarlanicak-->
	<p id='number_display' class='number_display'>Je suis number_display</p>
	<?php
		//Sayi dugmelerinin eklenmesi icin kullanilan fonksiyon
		generate_number_buttons(10,5);
	?>
	<br>
	<?php
		generate_operators();
	?>
</body>
</html>