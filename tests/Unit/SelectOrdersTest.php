<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Actions\SelectOrderAction;

class SelectOrdersTest extends TestCase
{
    /**
     * Тест на получение массива с заказами
     *
     * @return void
     */   
    public function test_example()
    {
        $action = new SelectOrderAction;
        $data = $action->SelectAll();
        $this->assertIsArray($data);
        $this->assertNotEmpty($data);
    }
}
