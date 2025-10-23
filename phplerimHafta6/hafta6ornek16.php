<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Sayıların karesini alan bir fonksiyon
function karesiniAl($n) {
return $n * $n;
}
$sayilar = [1, 2, 3, 4, 5];
// 'karesiniAl' fonksiyonunu $sayilar dizisindeki her elemana uygula
$kareler = array_map("karesiniAl", $sayilar);
print_r($kareler);
// Çıktı: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )
?>
</body>
</html>