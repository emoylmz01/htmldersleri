<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// 'date()' fonksiyonu: Zamanı formatlamak için kullanılır
echo "Güncel Tarih ve Saat: " . date("d-m-Y H:i:s") . "<br>"; // 23-10-2025 09:21:57
echo "Sadece Yıl: " . date("Y") . "<br>";
echo "Günün Adı (İngilizce): " . date("l") . "<br>"; // Thursday
// 'strtotime()' fonksiyonu: Metin halindeki tarihi zaman damgasına (timestamp) çevirir
$zaman_damgasi = strtotime("10 January 2026");
echo "10 Ocak 2026'nın zaman damgası: $zaman_damgasi <br>";
// 'strtotime' ile tarih hesaplamaları
$yarin = strtotime("+1 day");


$haftaya = strtotime("+1 week");
$gecen_ay = strtotime("-1 month");
echo "Yarının tarihi: " . date("d-m-Y", $yarin) . "<br>";
echo "Haftaya bugün: " . date("d-m-Y", $haftaya) . "<br>";
?>
</body>
</html>