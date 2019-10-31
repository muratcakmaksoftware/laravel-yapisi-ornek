<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});*/
//url belirtme, controller@fonksiyon

//Masterpage oluşturma yöntem 1
//Route::get('/', 'index@index');
//Route::get('/index', 'index@index');

//Masterpage oluşturma yöntem 2
Route::get('/', 'masterpage@index');
Route::get('/index', 'masterpage@index');

//Hakkımda
Route::get('/hakkimda', 'hakkimda@index');
Route::post('/hakkimda', 'hakkimda@post');

Route::get('/login', 'login@index');
Route::post('/login', 'login@login');

Route::get('/admin/index', 'admin\index@index')->name('adminpanel');
Route::post('/admin/index', 'admin\index@post');

/*
Route::get('/testpage', function () {
    return view('testpage');
});*/

// get('url ismi fark etmez, controller_Adi@fonksiyon_adi)
//Route::get('/testpage', 'TestPage@index');

Route::get('/testpage/{id?}', 'TestPage@index');

///Route::get('kullanici/profil', 'UserController@uyeGoster');

	
//Route::get('kullanici/profil', 'UserController@uyeGoster')->name('profil'); name işi kolay isim ile yönlendirmek için ***Örnek kullanım: route('profil');
//route('profil');


/* Önemli
Route::namespace('Admin')->group(function () {
      Route::get('yonetici', 'UserController@yoneticiGoster');
});
Yukarıdaki örnekte kullanılacak olan Controller dosyalarının ‘Admin’ klasörü altında olduğunu belirttik. 

// ----------------------
/*
Route::prefix('admin')->group(function () {
    Route::get('yoneticiler', 'UserController@yoneticiListele');
});
Bu örnekte ise url adresinin ilk bölümünde ‘admin’ gelen bağlantıların yapılacaklarını belirttik. 
Daha kısa bir açıklama ile buradaki route bilgisine ulaşmak için gelen adresin ‘admin/yoneticiler’ olması gereklidir.*/


// id linkleme
//Route::get('kullanici/{id}', 'UserController@yoneticiGoster'); // kesinlikle o id orada olmalidir kullanici/1 şeklinde olmaz ise hata alır.
//diğer yöntem
//Route::get('kullanici/{id?}', 'UserController@yoneticiGoster'); // ? işareti sayesinde burada id olup olmaması önemli değildir.


//Url kullanma örneği
/*
Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    //
});*/