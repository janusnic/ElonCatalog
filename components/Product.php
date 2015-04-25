<?php namespace Elon\Catalog\Components;

use Cms\Classes\ComponentBase;

/**
 * 
 * @author Denis Dolgopolov <dolgopolovdc@gmail.com>
 *
 */
class Product extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Product Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

}