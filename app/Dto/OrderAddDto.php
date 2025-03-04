<?php

namespace App\Dto;

use App\Dto\BaseDto;
use App\Requests\OrderAddRequest;

class OrderAddDto extends BaseDto
{
    public string    $name;
    public int       $product;
    public string    $comment;
    public int       $quantity;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param OrderAddRequest $request
     * @return static
     */
    public static function fromRequest(OrderAddRequest $request): self
    {
        return new self([
            'name'     => $request->get('name'),
            'product'  => $request->get('product'),
            'comment'  => $request->get('comment'),
            'quantity' => $request->get('quantity'),
        ]);
    }
}

