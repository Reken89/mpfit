<?php

namespace App\Dto;

use App\Dto\BaseDto;
use App\Requests\ProductUpdateRequest;

class ProductUpdateDto extends BaseDto
{
    public int       $id;
    public string    $name;
    public string    $description;
    public string    $category;
    public float     $price;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param ProductUpdateRequest $request
     * @return static
     */
    public static function fromRequest(ProductUpdateRequest $request): self
    {
        return new self([
            'id'          => $request->get('id'),
            'name'        => $request->get('name'),
            'description' => $request->get('description'),
            'category'    => $request->get('category'),
            'price'       => $request->get('price'),
        ]);
    }
}

