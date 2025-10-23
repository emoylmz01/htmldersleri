<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// varsayalim ki 'header.php' adında bir dosyamız var:
// <h1>Siteme Hoş Geldiniz</h1><hr>
// ve 'footer.php' adında bir dosyamız var:
// <hr><p>Tüm hakları saklıdır. 2025</p>
include "header.php"; // header.php'nin içeriğini buraya dahil et
echo "<p>Bu sayfanın ana içeriğidir.</p>";
require "footer.php"; // footer.php'nin içeriğini buraya dahil et
// Eğer dosya adını yanlış yazsaydık (örn: footer_yok.php)
// require hata verip scripti durdururdu.
?>
</body>
</html>