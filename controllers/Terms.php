<?php namespace Elon\Catalog\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Terms Back-end Controller
 */
class Terms extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Elon.Catalog', 'catalog', 'terms');
    }
}