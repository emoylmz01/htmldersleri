<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Bu bir yorum satırıdır.
// Ekrana "Merhaba Dünya!" yazar.
echo "Merhaba Dünya!";
// --- DEĞİŞKENLER ---
// Değişkenler $ işareti ile başlar.
// Veri türünü belirtmenize gerek yoktur.
$mesaj = "PHP öğrenemiyorum."; // String (Metin)
$yil = 2025; // Integer (Tamsayı)
$pi_sayisi = 3.14; // Float / Double (Ondalıklı sayı)
$ogrenci_mi = true; // Boolean (true veya false)
// Çıktı verirken değişkenleri kullanma
// '.' (nokta) operatörü metinleri ve değişkenleri birleştirmek için kullanılır.
echo "<br>"; // Tarayıcıda bir alt satıra geçmek için HTML etiketi
echo $mesaj;
echo "<br>";
echo "Bu yıl " . $yil . " yılıdır.";
// Değişkenin içindeki değeri de metne gömerek yazabilirsiniz:
echo "<br>";
echo "Pi sayısı yaklaşık olarak $pi_sayisi değerindedir.";
?>
</body>
</html>