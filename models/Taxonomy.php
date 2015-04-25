<?php namespace Elon\Catalog\Models;

use Model;

/**
 * Taxonomy Model
 * 
 * @author Denis Dolgopolov <dolgopolovdc@gmail.com>
 * 
 */
class Taxonomy extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'elon_catalog_taxonomies';

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