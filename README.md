    * url-1;  /api/v1/callback
    * url-2;  /test
* some unit tests
* ftp connection
* try&catch
* database seeding
* queue / Job
* nested tree model For Categories
* DB model
* YmdHis tarih formatında en son yüklenen dosya çekilmekte

90Pixel PHP Developer Challenge
===============================

İhtiyaç
=======

FTP'de bir klasöre bir sistem tarafından otomatik olarak Excel dosyası olarak atılan kategori ağacının veritabanına aktarılarak sistem yöneticisine bildirim gönderilmesi. Bu işlem verilecek bir hook URL'ine herhangi bir GET isteği geldiğinde tetiklenecek ve kuyruğa gönderilerek arka planda işlenecektir.

Bilgiler
========

FTP Bilgileri
-------------

**Sunucu:** 90pixel.net

**Kullanıcı Adı:** challenge@90pixel.net

**Parola:** ch@lleng3

Dosyalar
--------

FTP'ye bağlandığınızda categories dizini altında kategoriler-{YmdHis}.xlsx formatında dosyalar göreceksiniz. Bu dosyalardan YmdHis tarih formatında en son yüklenen dosya güncel dosya olarak kabul edilerek içeri aktarılacaktır.

Beklenenler
===========

-   Symfony yada Laravel framework kullanmanız
-   DB modelini oluşturmanız
-   Kategori ağacının model yapısı olarak  "nested tree model" kullanmanız
-   İşlemi kuyruk yapısıyla arkaplanda yapmanız
-   OOP ve SOLID prensiplerine uymanız
-   PSR-2 standartlarına uymanız
-   İhtiyaç duyabileceğiniz kütüphaneleri bularak bu kütüphanelerle çalışmanız
-   İşlem tamamlandığı zaman buradayim@90pixel.com adresine yapılan işlemin sonucunun mail olarak gönderilmesi

Bonus
-----

-   Projeyi Dockerize etmeniz
-   Unit Test ve Integration Test yazmanız bonus olarak yansıyacaktır. 

-   Bildirim gönderme, mail gönderme, veritabanına yazma, kuyruğa atma vs gibi işlemleri de test etmeniz beklenmektedir.

-   Database seeding, Model Factory yazmak
-   Kod standartlaştırma araçlarının kullanımı

Tamamladıktan sonra public bir git reposu oluşturup linkini buradayim@90pixel.com adresine gönderebilirsiniz.
