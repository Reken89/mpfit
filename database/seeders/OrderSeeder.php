<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::insert([
            [
                'name'       => 'Альтова Юлия Ивановна',
                'date'       => date('Y-m-d'),
                'product_id' => 2,
                'status'     => 'новый',
                'comment'    => 'Шапка обычного качества',
                'price'      => 1500,      
                'quantity'   => 1,
            ],
            [
                'name'       => 'Иванов Иван Иванович',
                'date'       => date('Y-m-d'),
                'product_id' => 1,
                'status'     => 'новый',
                'comment'    => 'Хорошие ботинки',
                'price'      => 8000,      
                'quantity'   => 1,
            ],
        ]);
     
    }
}

