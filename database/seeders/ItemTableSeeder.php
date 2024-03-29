<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items=[
            ['name'=>'Pen', 'price'=>100],
            ['name'=>'Pen', 'price'=>100],
            ['name'=>'Pen', 'price'=>100],
            ['name'=>'Pen', 'price'=>100],
        ];
        foreach($items as $item){
            Item::create($item);
        }
        
    }
}
