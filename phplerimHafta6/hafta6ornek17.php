<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// $mesaj parametresi opsiyoneldir, varsayılan değeri "Hoş geldin"
function selamla($isim, $mesaj = "Hoş geldin") {
echo "$mesaj, $isim! <br>";
}
selamla("Ahmet"); // Varsayılan mesajı kullanır
selamla("Ayşe", "Görüşürüz"); // Kendi mesajımızı göndeririz
?>
</body>
</html>