<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Actions\SelectProductAction;
use App\Actions\SelectCategoryAction;
use App\Actions\AddProductAction;
use App\Actions\DeleteProductAction;
use App\Actions\UpdateProductAction;
use Illuminate\Http\Request;
use App\Requests\ProductAddRequest;
use App\Requests\ProductDeleteRequest;
use App\Requests\ProductUpdateRequest;
use App\Dto\ProductAddDto;
use App\Dto\ProductDeleteDto;
use App\Dto\ProductUpdateDto;

class ProductController extends Controller
{
    /**
     * Front отрисовка страницы "Товары"
     *
     * @param 
     * @return view
     */
    public function ProductView()
    {
        return view('products');   
    }
    
    /**
     * Back отрисовка страницы "Товары"
     *
     * @param 
     * @return view
     */
    public function ProductTable()
    {
        $products = $this->action(SelectProductAction::class)->SelectAll();
        $category = $this->action(SelectCategoryAction::class)->SelectAll();
        $info = [
            'products' => $products,
            'category' => $category,
        ];
        return view('back.products', ['info' => $info]);   
    }
    
    /**
     * Front отрисовка страницы "Детализация товара"
     *
     * @param int $id
     * @return view
     */
    public function DetailingView(int $id)
    {
        return view('detailing', ['id' => $id]);  
    }
    
    /**
     * Back отрисовка страницы "Детализация товара"
     *
     * @param 
     * @return view
     */
    public function DetailingTable(Request $request)
    {
        $id = $request->id;
        $product = $this->action(SelectProductAction::class)->SelectProduct($id);
        $category = $this->action(SelectCategoryAction::class)->SelectAll();
        $info = [
            'product' => $product,
            'category' => $category,
        ];
        return view('back.detailing', ['info' => $info]);   
    }
    
    /**
     * Добавление товара в таблицу
     *
     * @param ProductAddRequest $request
     * @return bool
     */
    public function ProductAdd(ProductAddRequest $request)
    {
        $dto = ProductAddDto::fromRequest($request);   
        $result = $this->action(AddProductAction::class)->AddProduct($dto);
        return $result;
    }
    
    /**
     * Удаление товара из таблицы
     *
     * @param ProductDeleteRequest $request
     * @return bool
     */
    public function ProductDelete(ProductDeleteRequest $request)
    {
        $dto = ProductDeleteDto::fromRequest($request);   
        $result = $this->action(DeleteProductAction::class)->DeleteProduct($dto);
        return $result;       
    }
    
    /**
     * Обновление товара в таблице
     *
     * @param ProductUpdateRequest $request
     * @return bool
     */
    public function ProductUpdate(ProductUpdateRequest $request)
    {
        $dto = ProductUpdateDto::fromRequest($request);   
        $result = $this->action(UpdateProductAction::class)->UpdateProduct($dto);
        return $result; 
    }
    
}
