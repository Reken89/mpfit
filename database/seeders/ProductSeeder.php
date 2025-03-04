<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            [
                'name'        => 'Ботинки',
                'category_id' => 3,
                'description' => 'Ботинки натуральная кожа и натуральный мех',
                'price'       => 8000,
            ],
            [
                'name'        => 'Шапка',
                'category_id' => 1,
                'description' => 'Шапка белого цвета',
                'price'       => 1500,
            ],
        ]);
     
    }
}

