<?php

namespace App\Actions;

use App\Models\Order;
use App\Dto\OrderAddDto;

class AddOrderAction
{
    /**
     * Добавляем новый заказ
     *
     * @param OrderAddDto $dto, float $price
     * @return bool
     */
    public function AddOrder(OrderAddDto $dto, float $price): bool
    {
        $result = Order::create([
            'name'       => $dto->name,
            'date'       => date('Y-m-d'),
            'product_id' => $dto->product,
            'status'     => 'новый',
            'comment'    => $dto->comment,
            'price'      => $price,
            'quantity'   => $dto->quantity,
        ]);
        return $result == true ? true : false;
    }
} 
