<?php namespace Elon\Catalog;

use System\Classes\PluginBase;

/**
 * Elon Catalog Plugin Information File
 * 
 * @author Denis Dolgopolov <dolgopolovdc@gmail.com>
 *
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Elon Catalog',
            'description' => 'Product catalog.',
            'author'      => 'Trofim Jugastrov, Dolgopolov Denis, Alexander Khramov, Natalia Kosman',
            'icon'        => 'icon-shopping-cart'
        ];
    }

}
