<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('kategoris')->insert([
    		['nama_kategori' => 'Eletronik'],
    		['nama_kategori' => 'Audio'],
    		['nama_kategori' => 'Gaming & Console'],
    		['nama_kategori' => 'Kamera & Drone'],
    		['nama_kategori' => 'Komputer & Aksesoris'],
    		['nama_kategori' => 'Alat & Aksesoris Musik'],
    		['nama_kategori' => 'Makanan & Minuman'],
    		['nama_kategori' => 'Alat Pertukangan'],
    		['nama_kategori' => 'Material Kontruksi'],
    		['nama_kategori' => 'Perawatan Rumah'],
    		['nama_kategori' => 'Perlengkapan Dapur'],
    		['nama_kategori' => 'Olahraga & Outdoor'],
    		['nama_kategori' => 'Buku & Alat Tulis'],
    		['nama_kategori' => 'Suvenir & Hadiah'],
    		['nama_kategori' => 'Buku & Majalah']
    	]);
    }
}
