<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class uyelermodel extends Model
{
    /*
    Burada Laravel Model için önemli bir konuya dikkat etmeniz gerekmektedir.
    Oluşturduğunuz Model adı ile veritabanındaki tablo arasında bir ilişki vardır. 
    Bu ilişki oluşturduğunuz tablonun, Model isminin küçük harf ile başlayan ve İngilizce olarak çoğul yapılmış hali olmasıdır.   

    Page (model) => pages (tablo)
    City (model) => cities (tablo)*/

    //tablo ismi class isminden farklı ise
    protected $table = 'uyeler';

    //Yine aynı şekilde Primary Key olarak id kullanmayacaksanız eğer onu da,
    protected $primaryKey = 'uye_id';

    // tabloda created_at ve updated_at sütunları yoksa "false" girilir varsa "true" bu yapılmazsa hata alınır.
    public $timestamps = false;

    //protected $fillable = ['isim','yas','kul_adi']; //değiştirilmesi gereken sütunlar yazılır hepsi için [] yapmamız yeterlidir.
    protected $fillable = [];

    //protected $guarded = []; // Korumak istediğimiz sütunların adları yazılır.
    protected $guarded = ['uye_id']; //uye_id hariç tüm sütunların değişebileceğini gösterdik.

}
