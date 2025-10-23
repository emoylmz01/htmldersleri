<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// (Bağlantı kodlarının önceki örnekteki gibi yapıldığını varsayıyoruz)
// $db = new PDO("mysql:host=localhost;dbname=test_db;charset=utf8", "root", "");
try {
$silinecek_id = 2; // ID'si 2 olan kullanıcıyı sil
$stmt = $db->prepare("DELETE FROM kullanicilar WHERE id = :id");
// Değeri doğrudan execute() içinde de gönderebiliriz (alternatif yol)
$stmt->execute([':id' => $silinecek_id]);
// rowCount(): Son INSERT, UPDATE veya DELETE işleminden
// etkilenen satır sayısını döndürür.



$etkilenen_satir_sayisi = $stmt->rowCount();
if ($etkilenen_satir_sayisi > 0) {
echo "ID: $silinecek_id olan kullanıcı başarıyla silindi. (Etkilenen satır:
$etkilenen_satir_sayisi)";
} else {
echo "Silinecek kullanıcı bulunamadı (ID: $silinecek_id).";
}
} catch (PDOException $e) {
echo "Silme Hatası: " . $e->getMessage();
}
?>
</body>
</html>