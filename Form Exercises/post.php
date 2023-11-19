<style>
    .kutu {
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 10px;
        background-color: #f8f8f8;
        margin-top: 15px;
        width: 250px;
        height: 80px;
        display: flex;
    }
</style>

<?php
error_reporting(E_ALL);
$sayi = $_POST["sayi"];
function sayi($sayi){
    if(!empty($sayi)){
        if($sayi%3==0 && $sayi!=1){
            $sonuc = "Sayınız 3'e tam bölünebilmektedir.";
        }
        else{
            $yeni_sayi = $sayi;
            $yeni_sayi++;

           while ($yeni_sayi % 3 !==0){
               $yeni_sayi++;
           }
            $sonuc = "Sayınız 3'e tam bölünememektedir.<br>3'e bölünebilen en yakın sayı ${yeni_sayi}'dır.<br>Tekrar deneyiniz!";
            header('Refresh:20 ; URL=form.php');
        }
        echo '<div class="kutu">' . $sonuc . '</div>';
    }
    else{
        echo '<div class="kutu">Lütfen bir sayı giriniz.</div>';
    }

}

$calistir = array_map('sayi', $_POST);
echo "<pre>";



?>