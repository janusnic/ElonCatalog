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

    public function registerNavigation()
    {
        return [
            'catalog' => [
                'label'       => 'Каталог',
                'url'         => \Backend::url('elon/catalog/products'),
                'icon'        => 'icon-shopping-cart',
                'order'       => 500,
                'sideMenu' => [
                    'productitems' => [
                        'label'       => 'Товары',
                        'icon'        => 'icon-list-alt',
                        'url'         => \Backend::url('elon/catalog/productitems'),
                    ],
                    'taxonomies' => [
                        'label'       => 'Таксономии',
                        'icon'        => 'icon-list-alt',
                        'url'         => \Backend::url('elon/catalog/taxonomies'),
                    ],
                    'terms' => [
                        'label'       => 'Термы',
                        'icon'        => 'icon-list-alt',
                        'url'         => \Backend::url('elon/catalog/terms'),
                    ],
                ]
            ]
        ];
    }

}