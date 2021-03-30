<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class barang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([
            'kode_barang' => 'PRD001',
            'nama_barang' => 'Indomie',
            'kategori_barang' => 'Makanan',
            'harga' => '300',
            'qty' => '150'
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => 'PRD002',
            'nama_barang' => 'Pocari Sweat',
            'kategori_barang' => 'Minuman',
            'harga' => '5500',
            'qty' => '70'
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => 'PRD003',
            'nama_barang' => 'SilverQueen',
            'kategori_barang' => 'Snack',
            'harga' => '12000',
            'qty' => '10'
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => 'PRD004',
            'nama_barang' => 'Beras 5kg',
            'kategori_barang' => 'Sembako',
            'harga' => '500000',
            'qty' => '30'
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => 'PRD005',
            'nama_barang' => 'Cat Food',
            'kategori_barang' => 'Makanan',
            'harga' => '35000',
            'qty' => '150'
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => 'PRD006',
            'nama_barang' => 'Teh Pucuk',
            'kategori_barang' => 'Minuman',
            'harga' => '3000',
            'qty' => '100'
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => 'PRD007',
            'nama_barang' => 'Taro',
            'kategori_barang' => 'Snack',
            'harga' => '3500',
            'qty' => '200'
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => 'PRD008',
            'nama_barang' => 'Gula 1 kg',
            'kategori_barang' => 'Sembako',
            'harga' => '11500',
            'qty' => '56'
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => 'PRD009',
            'nama_barang' => 'Super Bubur',
            'kategori_barang' => 'Makanan',
            'harga' => '5000',
            'qty' => '15'
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => 'PRD010',
            'nama_barang' => 'Big Cola',
            'kategori_barang' => 'Minuman',
            'harga' => '15000',
            'qty' => '10'
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => 'PRD011',
            'nama_barang' => 'Kinder Joy',
            'kategori_barang' => 'Snack',
            'harga' => '15000',
            'qty' => '25'
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => 'PRD012',
            'nama_barang' => 'Tepung Terigu 1 kg',
            'kategori_barang' => 'Sembako',
            'harga' => '19000',
            'qty' => '22'
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => 'PRD013',
            'nama_barang' => 'Dog Food',
            'kategori_barang' => 'Makanan',
            'harga' => '50000',
            'qty' => '2'
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => 'PRD014',
            'nama_barang' => 'Coca Cola',
            'kategori_barang' => 'Minuman',
            'harga' => '20000',
            'qty' => '10'
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => 'PRD015',
            'nama_barang' => 'Oreo',
            'kategori_barang' => 'Snack',
            'harga' => '10000',
            'qty' => '15'
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => 'PRD016',
            'nama_barang' => 'Minyak Goreng 1 Liter',
            'kategori_barang' => 'Sembako',
            'harga' => '12000',
            'qty' => '10'
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => 'PRD017',
            'nama_barang' => 'Indomaret Fried Chicken',
            'kategori_barang' => 'Makanan',
            'harga' => '10000',
            'qty' => '5'
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => 'PRD018',
            'nama_barang' => 'Jasjus',
            'kategori_barang' => 'Minuman',
            'harga' => '2000',
            'qty' => '30'
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => 'PRD019',
            'nama_barang' => 'Big Wafle',
            'kategori_barang' => 'Snack',
            'harga' => '11000',
            'qty' => '2'
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => 'PRD020',
            'nama_barang' => 'Garam 1 Kg',
            'kategori_barang' => 'Sembako',
            'harga' => '33000',
            'qty' => '1'
        ]);
    }
}
