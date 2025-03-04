<?php

namespace App\Dto;

use App\Dto\BaseDto;
use App\Requests\OrderUpdateRequest;

class OrderUpdateDto extends BaseDto
{
    public int    $id;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param OrderUpdateRequest $request
     * @return static
     */
    public static function fromRequest(OrderUpdateRequest $request): self
    {
        return new self([
            'id' => $request->get('id'),
        ]);
    }
}

