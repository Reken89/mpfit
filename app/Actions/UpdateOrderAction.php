<?php

namespace App\Actions;

use App\Models\Order;
use App\Dto\OrderUpdateDto;

class UpdateOrderAction
{
    /**
     * Обновляем статус заказа
     *
     * @param OrderUpdateDto $dto
     * @return bool
     */
    public function UpdateOrder(OrderUpdateDto $dto): bool
    {   
        $result = Order::find($dto->id)
            ->update([                
                'status' => 'выполнен',
            ]);
        
        return $result == true ? true : false;
    }
}

