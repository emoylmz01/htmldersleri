<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Üst Sınıf (Parent Class)
class Hayvan {
public $isim;
protected $ses; // protected: Sadece bu sınıf ve onu miras alanlar erişebilir
public function __construct($isim, $ses) {
$this->isim = $isim;
$this->ses = $ses;
}
public function sesCikar() {
echo "$this->isim '$this->ses' diye ses çıkarır.<br>";
}
}
// Alt Sınıf (Child Class) - 'Hayvan' sınıfını miras alır
class Kedi extends Hayvan {
// Üst sınıfın kurucusunu (constructor) çağırabiliriz
public function __construct($isim) {
// 'parent::' üst sınıfı temsil eder
parent::__construct($isim, "Miyav");
}
// Kedi sınıfına özel bir metot
public function mirlar() {
echo "$this->isim mırıldıyor...<br>";
}
}
$tekir = new Kedi("Tekir");
$tekir->sesCikar(); // Miras alınan metot
$tekir->mirlar(); // Kendi metodu
?>
</body>
</html>