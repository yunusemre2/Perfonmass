<?php
	if($_POST){
		$username=$_POST["username"];
		$surname=$_POST["surname"];
		$mail=$_POST["mail"];
		$password=$_POST["password"];
		$passwordd=$_POST["passwordd"];
		include("baglanti.php");
		
		$kontrol=@mysql_query("insert into kullanici where (username,surname,mail,password,passwordd values('$username','$surname','$mail','$password','$passwordd')");
			if($kontrol){

				echo "Kayıt Başarılı";
			

	}
	else{
		echo "Kayıt Sorun Oldu";
	}
}
else{

	
?>

	
	<form name="form1" method="post" action="ekle.php">
		Adı <input type="text" name="username"><br>
		Soyadı <input type="text" name="surname"><br>
		E-Mail <input type="text" name="mail"><br>
		Şifre <input type="password" name="password"><br>
		Tekrar Şifre <input type="password" name="passwordd"><br>
		<input type="submit" name="gonder" value="kaydet"><br>

	</form>
	<?php
	}
	?>
