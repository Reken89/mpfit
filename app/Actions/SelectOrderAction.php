<?php

namespace App\Actions;

use App\Models\Order;

class SelectOrderAction
{
    /**
     * Возвращает все заказы
     *
     * @param 
     * @return array
     */
    public function SelectAll(): array
    {
        $info = Order::select()
            ->with(['product']) 
            ->get()
            ->toArray();
        return $info;       
    }

}

