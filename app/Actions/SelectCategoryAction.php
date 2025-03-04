<?php

namespace App\Actions;

use App\Models\Category;

class SelectCategoryAction
{
    /**
     * Возвращает все категории
     *
     * @param 
     * @return array
     */
    public function SelectAll(): array
    {
        $info = Category::select()
            ->get()
            ->toArray();
        return $info;       
    }
}

