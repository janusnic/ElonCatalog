<?php namespace Elon\Catalog\Components;

use Cms\Classes\ComponentBase;
use Elon\Catalog\Models\Category;

/**
 * 
 * @author Denis Dolgopolov <dolgopolovdc@gmail.com>
 *
 */
class Categories extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Categories Component',
            'description' => 'No description provided yet...'
        ];
    }
    
    public function categories()
    {
        $categories = Category::all();
        
        return $categories;
    }

    public function defineProperties()
    {
        return [];
    }

}