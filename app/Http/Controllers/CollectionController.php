<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function collectionTiga(){
        $karyawan00 = new \stdClass();
        $karyawan00->nama = "Rian";
        $karyawan00->alamat = "Cipondoh";
        $karyawan00->bagian = "Fullstack";
        $karyawan01 = new \stdClass();
        $karyawan01->nama = "Aldo";
        $karyawan01->alamat = "Bandung";
        $karyawan01->bagian = "Backend";
        $karyawan02 = new \stdClass();
        $karyawan02->nama = "Bambang";
        $karyawan02->alamat = "Jakarta";
        $karyawan02->bagian = "Frontend";
        $karyawan03 = new \stdClass();
        $karyawan03->nama = "Santo";
        $karyawan03->alamat = "Jogja";
        $karyawan03->bagian = "Frontend";
        $karyawans = collect([
            0 => $karyawan00,
            1 => $karyawan01,
            2 => $karyawan02,
            3 => $karyawan03,
        ]);
        // dump($karyawans);

        // echo $karyawans[1]->nama;
        // echo "<br>";
        // echo $karyawans[2]->alamat;
        // echo "<hr>";

        // // munculkan semua menggunakan foreach
        // foreach($karyawans as $karyawan){
        //     echo $karyawan->nama;
        //     echo "<br>";
        // }

        $hasil = $karyawans->groupBy('bagian');
        dump($hasil);

        $adikkakak = $karyawans->groupBy('bagian')->get("Frontend")->pluck('nama')->all();
        echo "Nama karyawan dengan bagian Frontend adalah : " . implode(',  ', $adikkakak);
        // $collection = collect([
        //     [
        //         'namaProduk' => 'Laptop A',
        //         'harga' => 3000000
        //     ],
        //     [
        //         'namaProduk' => 'Laptop B',
        //         'harga' => 2000000
        //     ],
        //     [
        //         'namaProduk' => 'Laptop C',
        //         'harga' => 4000000
        //     ]
        // ]);
        // urutkan berdasarkan key dari harganya
        //     dump($collection->sortBy('harga'));
        // // urutkan berdsasarkan key harga
        //     dump($collection->sortByDesc('harga'));
        // $hasil = $collection->filter(function($val,$key){
        //     return $val['harga'] > 2500000;
        // });
        // dump($hasil);

        // dump($collection->where('harga',2000000));
        // dump($collection->where('harga','>=',2000000));
        // 
        // dump($collection->pluck('namaProduk'));

        // $hasil = $collection->where('harga','>',2500000)->all();
        // foreach($hasil as $val)
        // echo $val['namaProduk']."<br>";

        // $hasil = $collection->where('harga',2000000)->first();
        // echo $hasil['namaProduk']."<br>";

        // dump($collection->sortBy('harga')->all());
        // dump($collection->sortBy('harga'))->each(function($val,$key){
        //     echo $val['namaProduk']."<br>";
        // });
        // $collection = collect(['Latihan','Framework','Laravel','1,2,3']);
        // echo $collection;
        // echo "<br>";
        
        // // ngambil collection dari assosiatve array 
        // $collection2 =  collect([
        //     'Nama'=>'Riko',
        //     'Kelas'=>'VII',
        //     'Sekolah'=>'SMA Santo'
        // ]);
        // echo $collection2;
        
        // $collection = collect([
        //     "Nama"=>"Rangga",
        //     "Sekolah"=>"SMK 1 Bekasi",
        //     "Kota"=>"Tangerang",
        //     "Jurusan"=>"IT"
        // ]);
            // $collection->each(function($val,$key){
            //     echo "$key: $val <br>";
            // });
            // foreach($collection as $key => $val){
            //     echo "$key : $val <br>";
            // };
            // dump($collection->search('IT'));
            // dump($collection->keys());
            // dump($collection->values());
            // dump($collection->flip());
            // dump($collection->forget("Sekolah"));
            // $hasil = $collection->replace([
            //     "Sekolah"=>"SMP 1 Jakarta",
            //     "Kota"=>"Jakarta"
            // ]);
            // dump($hasil);
            // dump($collection->has('Alamat'));
            // dump($collection->get('Kota'));
            // dump($collection->get('Alamat','Cipondoh'));


        // $collection = collect([2,1,9,6,4,9,3]);
        //     // dump($collection->count());
        //     dump($collection->sort());
            
            // dump($collection->first());
            // dump($collection->last());
            // $tampil = [1,2,3];
            // $muncul = collect([1,2,3]);
            // dump($tampil);
            // dump($muncul);

            // dump($collection->all());
            // echo $collection->unique();
        
        // // Ini True
            // dump($collection->contains(3));
        // // Ini False
            // dump($collection->contains(8));
            // echo $collection->concat([10,11,12]);
            // dump($collection->random());
            // dump($collection->sum());
            // dump($collection->avg());
            // dump($collection->max());
            // dump($collection->min());
            // dump($collection->median());
    }
}
