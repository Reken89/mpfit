<?php

namespace App\Dto;

use App\Dto\BaseDto;
use App\Requests\ProductDeleteRequest;

class ProductDeleteDto extends BaseDto
{
    public int    $id;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param ProductAddRequest $request
     * @return static
     */
    public static function fromRequest(ProductDeleteRequest $request): self
    {
        return new self([
            'id' => $request->get('id'),
        ]);
    }
}

