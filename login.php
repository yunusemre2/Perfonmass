<link rel="stylesheet" type="text/css" href="css2.css" />
<?php 
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

 include("baglan.php");

if ($username && $password) {
    
   $sorgula = mysql_query("select * from kullanici where username= '$username' and password='$password'");
   $verisay = mysql_num_rows($sorgula);

   if ($verisay != 0) {
        $_SESSION['login']=true; 
       $session['username'] = $username;
       $session['password'] = $password;


       echo "<h3>Başarılı Oldu<h3/><br/> <a href='anasayfa.php'><font color=black>Profile git.</a>";
       
      


   }else {

       echo "Kullanici Adi Ve Sifre Yanlıs <a href='index.php'>Anasayfa</a>";
       
   }

}else{

    echo "<h1><b><font color='red'>Kullanici adi ve sifre ile giris yapiniz..";
    include ("index.php");
}
?>
</body>
</html>