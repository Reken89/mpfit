<?php

namespace App\Actions;

use App\Models\Product;
use App\Dto\ProductUpdateDto;

class UpdateProductAction
{
    /**
     * Обновляем значения в таблице products
     *
     * @param ProductUpdateDto $dto
     * @return bool
     */
    public function UpdateProduct(ProductUpdateDto $dto): bool
    {   
        $result = Product::find($dto->id)
            ->update([                
                'name'        => $dto->name,
                'description' => $dto->description,
                'category_id' => $dto->category,
                'price'       => $dto->price,
            ]);
        
        return $result == true ? true : false;
    }
}

