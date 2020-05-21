<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PageController@index');
Route::get('/karyawan','PageController@tampil');
Route::get('/tiga','CollectionController@collectionTiga');
// Route::get('/beranda',function(){
//     return view('latihan.beranda');
// });
// Route::get('/profile',function(){
//     return view('latihan.profile');
// });

// Route::get('/admin',function(){
//     return view('admin');
// });

// Route::get('/gallerttesadasd/asdibasdd',function(){
//     return(data.gallery);
// })->name('gambar');
// Route::get('/karyawan',function (){
//     return view('data.karyawan',[
//         'karyawan01' => 'Ini nama dari route',
//         'karyawan02' => 'Karyawan 02',
//         'karyawan03' => 'Sintacocok sad',
//         'karyawan04' => 'Yah begitulah',
//         ]);
// });

// Route::get('/karyawan', function(){
//     $karyawan = ['Nama karyawan 1','Nama karyawan 2','Nama karyawan 3'];
//     // return view ('data.karyawan' , compact('karyawan'));
//     return view ('data.karyawan')->with('karyawan',$karyawan);
// });

// Route::get('/home', function(){
//     return "Selamat datang di halaman HOME";
// });

// Route::get('/hello',function(){
//     $hello = ['Hello world', 2 => ['Hello Cipondoh','Hello Ciledug']];
//     // dump($hello); // dd atau var_dump atau dump = dd untuk tahap akhir
//     // die(); // buat setopin dump 
//     echo '<pre>';
//     print_r($hello);
//     echo '</pre>';
//     die();
//     return $hello;
// });

// Route::get('/profile', function(){
//    echo "<h1>Selamat datang di halaman PROFILE</h1>";
//    echo "<p>Selamat sore</p>";
// });

// Route::get('/karyawan/importir', function(){
//     echo "<h2 style='text-align:center;'><u>Welcome Admin</u></h2>";
// });

// Route::get('/karyawan/{nama}', function($nama){
//     return "Ini adalah data karyawan dengan nama $nama";
// });

// Route::get('/user/{id}', function ($id){
//     return "tampilan dengan tulisan = $id";
// });

// Route::get('/hubungi-admin', function(){
//     return "<h1>Silahkan hubungi admin</h1>";
// });

// Route::redirect('/contact-us','/hubungi-admin');



// Route group

// Route::prefix('/admin')->group(function(){
//     Route::get('/',function(){
//         echo "<h1>Data karyawan Admin</h1>";
//     });
//     Route::get('/it',function(){
//         echo "<h1>Data karyawan Bagian IT</h1>";
//     });
//     Route::get('/marketing',function(){
//         echo "<h1>Data karyawan Marketing</h1>";
//     });
//     Route::get('/hrd',function(){
//         echo "<h1>Data karyawan hrd</h1>";
//     });
    
// });


// Route::get('/data', function(){
//     return "Data Karyawan";
// });


//tugas

// Route::prefix('/admin')->group(function(){
//         Route::get('/karyawan',function(){
//             return " <ul>
//             <li>Agung Ardiyanto</li>
//             <li>Lukman Nur Hakim</li>
//             <li>Aldo Wardana Saputro</li>
//             <li>Jurzais Ilham</li>
//             <li>Marnitha</li>
//             <li>Ronaldo</li>
//             <li>Rangga Adiyani</li>
//             <li>Adiet Narto</li>
//             <li>Rafif Setia</li>
//             <li>Rajif</li>
//         </ul>";
//         });
        
// });

// Route::redirect('/admin','/kartu_prakerja');

// Route::prefix('/karyawan')->group(function(){
//     Route::get('/gudang',function(){
//         return "<h1 style='text-align:center;'>Ini Halaman Karyawan Gudang</h1>";
//     });
//     Route::get('/teknisi',function(){
//         return "<h1 style='text-align:center;'>Ini Halaman Karyawan Teknisi</h1>";
//     });
//     Route::get('/produksi',function(){
//         return "<h1 style='text-align:center;'>Ini Halaman Karyawan Produksi</h1>";
//     });
// });


// Route::prefix('/user')->group(function(){
//     Route::get('/{id1}+{id2}',function($id1,$id2){
//         return "Ini User dengan ID = $id1 <br> Ini User dengan ID = $id2";
//     });
// });

// Route::group(['prefix' => 'user'], function () {
//     Route::get('{id1}.{id2}', function ($id1, $id2) {
//         return "Lukman nik = $id1 <br> Rangga nik = $id2";
//     });
// });


// Route::get('/kartu_prakerja', function() {
//     echo '
//         <ul>
//             <li>Agung Ardiyanto</li>
//             <li>Lukman Nur Hakim</li>
//             <li>Aldo Wardana Saputro</li>
//             <li>Jurzais Ilham</li>
//             <li>Marnitha</li>
//             <li>Ronaldo</li>
//             <li>Rangga Adiyani</li>
//             <li>Adiet Narto</li>
//             <li>Rafif Setia</li>
//             <li>Rajif</li>
//         </ul>
//     ';
// });