<?php namespace Elon\Catalog\Components;

use Cms\Classes\ComponentBase;
use Elon\Catalog\Models\ProductItem as Products;


/**
 * 
 * @author Denis Dolgopolov <dolgopolovdc@gmail.com>
 *
 */
class ProductList extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'ProductList Component',
            'description' => 'Component from products list'
        ];
    }
    
    public function products()
    {
        $products = Products::all();
        
        return $products;
    }

    public function defineProperties()
    {
        return [];
    }

}