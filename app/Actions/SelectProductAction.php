<?php

namespace App\Actions;

use App\Models\Product;

class SelectProductAction
{
    /**
     * Возвращает все товары
     *
     * @param 
     * @return array
     */
    public function SelectAll(): array
    {
        $info = Product::select()
            ->with(['category']) 
            ->get()
            ->toArray();
        return $info;       
    }
    
    /**
     * Возвращает одну строку по id
     *
     * @param int $id
     * @return array
     */
    public function SelectProduct(int $id): array
    {
        $info = Product::select()
            ->with(['category']) 
            ->where('id', $id)  
            ->first()
            ->toArray();
        return $info;       
    }
}

