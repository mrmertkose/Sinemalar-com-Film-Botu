# Sinemalar.com Film Botu
Sinemalar.com Üzerinden Film Bilgileri Çeker.

# Kurulum
Komut Satırında Çalıştır:
```
composer require mertkose/sinemalar-com
```
# Kullanım
```
require 'vendor/autoload.php';

use Sinemalar\Sinemalar_class;

// "https://www.sinemalar.com/film/638/esaretin-bedeli" url adresindeki alınması gereken yer.
$veri = new Sinemalar_class("638/esaretin-bedeli");

echo $veri->get_filmAd();
// Esaretin Bedeli
```

# Methodlar
```
get_filmAd();
// Esaretin Bedeli

get_puan();
// 9.1

get_oy();
// 14723

get_filmOrjAd();
// The Shawshank Redemption

get_vizyon();
// 10 Mart 1995

get_tur();
// Dram , Polisiye , Suç

get_sure();
// 142dk

get_yapimi();
// 1994 - ABD

get_konu();
// Genç ve başarılı bir bankacı olan...

get_poster();
// https://img01.imgsinemalar.com/images/afis_dev/e/Esaretin-Bedeli-1302463264.jpg

get_video();
// http://istr.izlesene.com/data/videos/6857/6857940-270_1-69k.mp4/d2a327de833e690d8a10b1ba44deb0e8/5C4F2EC4

get_yonetmen();
// Frank Darabont

```
# Eklenecekler
```
1- Oyuncular

