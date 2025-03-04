<?php

namespace Tests\Feature;

use Tests\TestCase;

class AddOrderTest extends TestCase
{
    /**
     * Тест на добавление заказа
     *
     * @return void
     */   
    public function test_example()
    {
        $response = $this->call('POST', '/orders/add', [
            'name'     => 'Петров Андрей Валерьевич',
            'product'  => 1,
            'comment'  => 'Быстрая доставка',
            'quantity' => 2,
        ]);
        
        $response->assertStatus(200);
    }
}
