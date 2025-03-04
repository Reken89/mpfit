<?php

namespace App\Actions;

use App\Models\Product;
use App\Dto\ProductAddDto;

class AddProductAction
{
    /**
     * Добавляем запись в таблицу products
     *
     * @param ProductAddDto $dto
     * @return bool
     */
    public function AddProduct(ProductAddDto $dto): bool
    {
        $result = Product::create([
            'name'        => $dto->name,
            'description' => $dto->description,
            'category_id' => $dto->category,
            'price'       => $dto->price,
        ]);
        return $result == true ? true : false;
    }
} 

