<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    <?php
$ogrenciler = [
[
"ad" => "Ali",
"puanlar" => [80, 90, 85]
],
[
"ad" => "Veli",
"puanlar" => [75, 95, 100]
],
[
"ad" => "Ayşe",
"puanlar" => [90, 90, 90]
]
];
// Veli'nin 2. puanını (indeks 1) ekrana yazdıralım
echo $ogrenciler[1]["ad"] . " adlı öğrencinin 2. puanı: " . $ogrenciler[1]["puanlar"][1]; // Çıktı: 95
echo "<hr><h3>Tüm Öğrenci Notları</h3>";
foreach ($ogrenciler as $ogrenci) {
echo "<b>{$ogrenci['ad']}</b>: ";
// İç içe döngü
foreach ($ogrenci['puanlar'] as $puan) {
echo "$puan ";
}
echo "<br>";
}
?>
</body>
</html>