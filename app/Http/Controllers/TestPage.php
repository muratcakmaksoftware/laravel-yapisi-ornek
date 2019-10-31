<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // request için gerekli.

use Illuminate\Support\Facades\DB; // veritabanını işlemleri için

class TestPage extends Controller
{
    
    public function index(Request $request, $id=null){
        echo "My Controller";
        echo is_null($id) ?  "" : "ID:".$id;
        
        //return view('testpage');
        // view a veri aktarma yöntemi.
        //return view('testpage', compact('id'));

        //$result = DB::select('select * from uyeler');
        //$result = DB::insert('insert into uyeler (isim,yas,kul_adi) values (?,?,?)', ['Murat', 14, 'murat34']);
        //$result = DB::insert('insert into uyeler (isim,yas,kul_adi) values ("muratsss",14,"qweqw")');
            
        //session ekleme
        $request->session()->put('myses', 'test');

        // Oturumda bilgi getir...
        $value = session('myses');

        echo "<br>mysession value: ".$value;
 
        //Oturumda bazı bilgiler sakla...
        session(['myses2' => 'test2']);
        
        //
        $value2 = $request->session()->get('key');
        echo "<br>mysession2 value: ".$value2;

        return view('testpage')->with("data", array('myid' => $id, 'uyeler' => $result));
    }
}
