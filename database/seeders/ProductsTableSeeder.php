<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PHPUnit\TextUI\XmlConfiguration\Group;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::Factory()->count(50)->create();
        // $products = [
        //     [
        //         'name' => 'Mũ A',
        //         'price' => 100.00,
        //         'description' => 'This is a product description',
        //     ],
        //     [
        //         'name' => 'Mũ B',
        //         'price' => 100.00,
        //         'description' => 'This is a product description',
        //     ],
        //     [
        //         'name' => 'Mũ C',
        //         'price' => 100.00,
        //         'description' => 'This is a product description',
        //     ],
        //     [
        //         'name' => 'Mũ D',
        //         'price' => 100.00,
        //         'description' => 'This is a product description',
        //     ]
        // ];
        // DB::table('products')->insert($products);
    }
    
}
