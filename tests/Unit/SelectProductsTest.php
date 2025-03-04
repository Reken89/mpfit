<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Actions\SelectProductAction;

class SelectProductsTest extends TestCase
{
    /**
     * Тест на получение массива с товарами
     *
     * @return void
     */   
    public function test_example()
    {
        $action = new SelectProductAction;
        $data = $action->SelectAll();
        $this->assertIsArray($data);
        $this->assertNotEmpty($data);
    }
}
