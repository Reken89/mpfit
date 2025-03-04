<?php

namespace App\Actions;

use App\Models\Product;
use App\Dto\ProductDeleteDto;

class DeleteProductAction
{
    /**
     * Удаление товара из таблицы
     *
     * @param ProductDeleteDto $dto
     * @return bool
     */
    public function DeleteProduct(ProductDeleteDto $dto): bool
    {   
        $delete = Product::where('id', $dto->id)
            ->delete();  
        
        return $delete == true ? true : false;
    }
}
