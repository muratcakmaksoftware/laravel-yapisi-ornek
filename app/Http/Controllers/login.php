<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\kullanicilarModel;

class login extends Controller
{
    public function index(){

        return view('login');
    }

    public function login(Request $request)
    {
        $kadi = $request->input('kuladi');
        $pw = $request->input('pw');

        //#############  Yol 1: Raw SQL Queries yapısı  #############
        //$results = DB::select("select * from kullanicilar WHERE kadi='".$kadi."' AND pw='".$pw."'"); 

        //#############   Yol 2: Laravel Query Builder  #############
        //select * from users where id=1 AND address="USA" AND (status="active" OR status="pending")
        /*DB::table('users')
            ->where('id', 1)
            ->where('address', 'USA')
            ->where(function($query) {
                $query->where('status', 'active')
                    ->orWhere('status', 'pending');
            })->get();
            
            VEYA


            DB::table('users')
            ->where([
                ['id', 1],
                ['address', 'USA'],
            ])
            ->where(function($query) {
                $query->where('status', 'active')
                    ->orWhere('status', 'pending');
            })->get();
            
            */
        //$results = DB::table('kullanicilar')->where('kadi', $kadi)->where('pw', $pw)->get();


        // ############# Yol 3: LARAVEL Eloquent   #############
        $results = kullanicilarModel::where('kadi', $kadi)->where('pw', $pw)->get();
        /*
        Ekleme
        $page = new Page;
        $page->baslik = "Laravel Eloquent";
        $page->icerik = "Laravel Eloquent ekleme işlemlerini yaptık";
        $page->aktif = 1;
        $page->save();

        Hepsini çağırma:    
        $pages = Page::all();

        Where         
        //işaretsiz eşittir anlamını taşır.
        Page::where('aktif', 1)->get();        
        Page::where('aktif', '!=', 1)->get();
        */

        if(count($results) > 0){
            foreach($results as $data){
                //echo $data->kadi;
                session(['kadi' => $data->kadi]);
                session(['pw' => $data->pw]);
                session(['isim' => $data->isim]);

                return redirect()->route('adminpanel');
            }
        }
        else
        {
            echo "Kullanıcı Adı veya Şifre Yanlış!";
            return view("login");
        }
    }


}
