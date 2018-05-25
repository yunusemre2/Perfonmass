
<?php
    if(isset($_FILES['dosya']))
    {
        $hata = $_FILES['dosya']['error'];//Dosyada hata var ise hata değişkenine aktardık. Buradan 1 veya 0 sonucu çıkar.
        if($hata != 0)//hata 0 değilse hatayı göster dedik.
        {
            echo 'Yüklenirken bir hata gerçekleşmiş.';//Hatamızı ekrana yazdırdık.
        }
        else//Hata yoksa dedik
        {
            $boyut = $_FILES['dosya']['size'];//Dosya boyutumuzu alıp değişkene aktardık.
            if($boyut > (1024*1024*3))//Buarada dosyamız 3 mb büyükse girmesini söyledik
            {//İsteyen arkadaslar burayı istediği gibi değiştirebilir size kalmış bir şey
                echo 'Dosya 3MB den büyük olamaz.';// 3 mb büyükse ekrana yazdıracağımız alan
            }
            else
            {
                $tip = $_FILES['dosya']['type'];//Dosya tipimizi aldık
                $isim = $_FILES['dosya']['name'];// Dosya ismimizi aldık
                $uzanti = explode('.', $isim);//Burada . sonraki kısmı aldık yani resim.jpg dosyamız var . sonraki olan kısım .jpg alıcaktır.
                $uzanti = $uzanti[count($uzanti)-1];//Yukarıda .jpg kısmını almıştık burada . kısmını silmiş oluyoruz elimizdeki uzantı sadece olarak jpg veya png olmuş olacak
                if($uzanti == 'jpg' || $uzanti == 'png' || $uzanti == 'gif')
                {//Kontrolümüzü yapıyoruz sadece jpg veya png veya gif dosyalarını kabul edicez
                    if(!file_exists('dosyalar'))//Buradaki şartımız dosyamızı dosyalar adında bir klasöre gönderiyoruz eğer klasör yoksa oluşturmasını istiyoruz burada
                        mkdir('dosyalar');//dosyalar isimli klasörü oluştur dedik
                    $dosya = $_FILES['dosya']['tmp_name'];//Dosyamızı gecici dizinden $dosya değişkenine aktardık.
                    copy($dosya, 'dosyalar/' . $_FILES['dosya']['name']);// copy fonksiyonu ile dosyalar isimli klasörüne kaydettik.
                    echo 'Dosyanız Yuklendi!';//Başarılı olması durumunda ekranda gözükecek.
                    echo '<br><a href="anasayfa.php">Geri Dönmek İçin Tıklayınız</a>';
                }
                else
                {//Eğer Dosya uzantısını kabul etmediysek kullanıcıyı bilgilendiriyoruz.
                    echo 'Yanlızca JPG,PNG dosyaları gönderebilirsiniz.';
                }
            }
        }
    }
 ?>