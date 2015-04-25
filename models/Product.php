<?php namespace Elon\Catalog\Models;

use Model;

/**
 * Product Model
 * 
 * @author Denis Dolgopolov <dolgopolovdc@gmail.com>
 * 
 */
class Product extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'elon_catalog_products';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}