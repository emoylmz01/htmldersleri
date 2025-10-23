<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$yas = 19;
if ($yas >= 18) {
echo "Ehliyet alabilirsiniz.";
} elseif ($yas >= 16) {
echo "Ehliyet alamazsınız ama stajyer ehliyet için başvurabilirsiniz.";
} else {
echo "Ehliyet alamazsınız.";
}
echo "<hr>"; // HTML'de yatay bir çizgi çizer
?>
</body>
</html>