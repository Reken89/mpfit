<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Actions\SelectOrderAction;
use App\Actions\SelectProductAction;
use App\Actions\UpdateOrderAction;
use App\Actions\AddOrderAction;
use App\Requests\OrderUpdateRequest;
use App\Requests\OrderAddRequest;
use App\Dto\OrderUpdateDto;
use App\Dto\OrderAddDto;

class OrderController extends Controller
{
    /**
     * Front отрисовка страницы "Заказы"
     *
     * @param 
     * @return view
     */
    public function OrderView()
    {
        return view('orders');   
    }
    
    /**
     * Back отрисовка страницы "Заказы"
     *
     * @param 
     * @return view
     */
    public function OrderTable()
    {
        $products = $this->action(SelectProductAction::class)->SelectAll();
        $orders = $this->action(SelectOrderAction::class)->SelectAll();
        $info = [
            'orders'   => $orders,
            'products' => $products,
        ];
        return view('back.orders', ['info' => $info]);   
    }
    
    /**
     * Обновление статуса у заказа
     *
     * @param OrderUpdateRequest $request
     * @return bool
     */
    public function OrderUpdate(OrderUpdateRequest $request)
    {
        $dto = OrderUpdateDto::fromRequest($request);  
        $result = $this->action(UpdateOrderAction::class)->UpdateOrder($dto);
        return $result;
    }
    
    /**
     * Добавление заказа
     *
     * @param OrderAddRequest $request
     * @return bool
     */
    public function OrderAdd(OrderAddRequest $request)
    {
        $dto = OrderAddDto::fromRequest($request); 
        $product = $this->action(SelectProductAction::class)->SelectProduct($dto->product);
        $price = $product['price'] * $dto->quantity;
        $result = $this->action(AddOrderAction::class)->AddOrder($dto, $price); 
        return $result;
    }
    
}
