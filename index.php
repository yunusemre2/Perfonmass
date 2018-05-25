<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <body>
    

    <style>  

    .btn4 {
-moz-box-shadow:inset 0px 39px 0px -24px red;
-webkit-box-shadow:inset 0px 39px 0px -24px ;
box-shadow:inset 0px 39px 0px -24px #2240;
background-color:#003366;
-moz-border-radius:4px;
-webkit-border-radius:4px;
border-radius:4px;
border:1px solid ;
display:inline-block;
cursor:pointer;
color:aqua;
font-family:Arial;
font-size:15px;
padding:6px 15px;
text-decoration:none;
text-shadow:0px 1px 0px #b23e35;
}
.btn4:hover {
background-color:red;
}
.btn4:active {
position:relative;
top:1px;
} 
#menu {
    margin: 0px;
    padding: 0px;
    list-style-type: none;
}
#menu li {
    float: left;
    width: 270px;
    position: relative;
}
#menu a {
    font-family: "Times New Roman", Times, serif;
    font-size: 16px;
    color: #FFFFFF;
    text-decoration: none;
    background-color: #00CCFF;
    display: block;
    padding-top: 5px;
    padding-right: 5px;
    border: 1px solid #00CCFF;
    text-align: center;
    line-height: 30px;
    margin-right: 2px;
    height:43px;


}


#menu a:hover {


    background-color: #0099FF;


}     
        body{
            margin: 0px;
            padding: 0px;
            background-color: white;
float:left;
        }  
        .sayfa{
            width: 1000px;
            height: 600px;
            margin: 0px auto;            
        }
        .ust{
width:1350px;
	
            height: 50px;
            background-color:   #003366;

       }
        .menu{
            width:1350px;
            height: 50px;
            background-color: aqua;

        }      
        
       
        #sag{
width:1350px;
            background: url(images/arkaplan.jpg);
             


            height: 600px;

    
    }  

     .sag2{
width:350px;
            
            height: 450px;
            margin: auto;
        }


  .alt{  
width:1350px;        
            height: 80px;
            background-color: gray;

        }      

  
    </style>
  </head>
<body>

   

    <div class="sayfa">

        <div class="ust">

<form action="login.php" method="POST">
	
<table align="center">
	
<tr>
	
<td><b><font color="white">Kullanici Adi</td></b>



<td><input type="text" name="username"></td>
<td><b><font color="white">Şifre</b></td>
<td><input type="password" name="password"></td>
<td><button class="btn4"><font color="white">GİRİŞ</button></td>
</tr>

</table>
</form>

</div>

       



        <div class="icerik"></div>    
            
            <div id="sag"><br><br>

                <div class="sag2">


                    <body>
                       

                    <p><h2><b><font color="white">Yaptığınız şeyde mükemmel olun</b></h2></p>
                   <form method="post" action="index.php">
        <b><font color="white">Adı <input type="text" name="username"><br><br>
         <b><font color="white">Soyadı <input type="text" name="surname"><br><br>
        <b><font color="white">E-Mail <input type="text" name="mail"><br><br>
       <b> <font color="white">Şifre <input type="password" name="password"><br><br>
       <b> <font color="white">Tekrar Şifre <input type="password" name="passwordd"><br><br>
        <p><font color="white">Hemen Kaydet’i tıklayarak,  Kullanıcı Anlaşmasını kabul etmiş olursunuz.</p>
        <input type="submit" name="gonder" value="KAYDET">

    </form>
</body>
<?php
    @$kontrol = $_POST['gonder'];
    if($kontrol)
    {
        $username= $_POST['username'];
        $surname= $_POST['surname'];
        $mail= $_POST['mail'];
        $password= $_POST['password'];
        $passwordd= $_POST['passwordd'];
        include("baglanti.php");
        if($password==$passwordd)
            
        {
        mysql_query("insert into kullanici(username,surname,mail,password) values('$username','$surname','$mail','$password')",$baglanti) or die ("veri eklenemedi" .mysql_error());
        echo "<h1>veriniz eklendi";
        }
        else echo "Parolalar eşleşmiyor.";



    }
?>


                
            </div>
            
            
      
            

