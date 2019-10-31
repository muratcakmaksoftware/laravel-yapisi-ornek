<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\uyelermodel;

class index extends Controller
{
    public function index(){
        
        if(session()->has('kadi') && session()->has('pw')) 
        {
            /*
            echo "logged in<br/>";
            echo session("kadi") .  " - ". session("pw");
            */
            return view("/admin/index");             //->with("data", array());
            
        }
        else{
            return redirect('/login');
        }

        
    }

    public function post(Request $request){        
        $protocol = $request->protocol;
        
        if($protocol == "logout"){
            session()->flush(); // tüm session bilgilerini silme. kadi ve pw key bilgileri kayıtlı kalır bu yüzden aşağıdaki kod yazılır.
            session()->regenerate(); // Oturum ID’sini Tekrar Oluşturma
            $protocol = "logoutok"; // session bilgileri silindi!
        }
        else if($protocol == "uyekayıt"){
            $isim = $request->isim;
            $yas = $request->yas;
            $kuladi = $request->kuladi;

            $uyeKayit = new uyelermodel;
            $uyeKayit->isim = $isim;
            $uyeKayit->yas = $yas;
            $uyeKayit->kul_adi = $kuladi;
            $uyeKayit->save();

            $protocol = "kayitok";
        }
        
        return response()->json(['success'=> $protocol]); // logoutok bilgisini geri gönderiyoruz ve orada sayfa yenileme işlemi yapılacak.
    }
}
