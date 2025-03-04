<?php

namespace App\Dto;

use App\Dto\BaseDto;
use App\Requests\ProductAddRequest;

class ProductAddDto extends BaseDto
{
    public string    $name;
    public string    $description;
    public string    $category;
    public float     $price;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param ProductAddRequest $request
     * @return static
     */
    public static function fromRequest(ProductAddRequest $request): self
    {
        return new self([
            'name'        => $request->get('name'),
            'description' => $request->get('description'),
            'category'    => $request->get('category'),
            'price'       => $request->get('price'),
        ]);
    }
}
