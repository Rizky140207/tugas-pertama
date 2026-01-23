<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('products')->insert([
            [
                'name' => 'Iphone',
                'description' => 'Smarphone',
                'price' => 100000,
                'stok' => 10,
                'image' => 'https://www.digimap.co.id/cdn/shop/files/0788-APPMG8M4ID-A-1.jpg?v=1759804407',
                'product_category_id' => 1,
            ],
             [
                'name' => 'Buku Cerita',
                'description' => 'Buku Dengan Gambar Yang Menarik',
                'price' => 25000,
                'stok' => 40,
                'image' => 'https://cdn.gramedia.com/uploads/items/9786230029196_Kumpulan_Cerita_Ragam_Indonesia_COVER.jpg',
                'product_category_id' => 2,
            ],
             [
                'name' => 'Nasi Goreng',
                'description' => 'Nasi Denga Rempah Rempah Yang Banyak',
                'price' => 10000,
                'stok' => 15,
                'image' => 'https://asset.kompas.com/crops/VcgvggZKE2VHqIAUp1pyHFXXYCs=/202x66:1000x599/1200x800/data/photo/2023/05/07/6456a450d2edd.jpg',
                'product_category_id' => 3,
            ],
        ]);
    }
}
