<?php

namespace Tests\Feature;

use Tests\TestCase;

class UpdateProductTest extends TestCase
{
    /**
     * Тест на обновление товара
     *
     * @return void
     */   
    public function test_example()
    {
        $response = $this->call('PATCH', '/products/update', [
            'id'          => 5,
            'name'        => 'Ботинки Camelot',
            'description' => 'Ботинки из кожи',
            'category'    => 3,
            'price'       => 9900,
        ]);
        
        $response->assertStatus(200);
    }
}

