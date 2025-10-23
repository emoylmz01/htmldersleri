<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$sicaklik = 15;
// Geleneksel if-else
if ($sicaklik > 10) {
$durum = "Hava ılık.";
} else {
$durum = "Hava soğuk.";
}
echo $durum . "<br>";
// Ternary Operatör ile
// (koşul) ? (doğruysa_bu) : (yanlışsa_bu);
$durum_kisa = ($sicaklik > 10) ? "Hava ılık." : "Hava soğuk.";
echo $durum_kisa;
?>
</body>
</html>