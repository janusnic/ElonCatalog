<?php namespace Elon\ElonCatalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

/**
 * 
 * @author Denis Dolgopolov <dolgopolovdc@gmail.com>
 *
 */
class CreateProductsTable extends Migration
{

    public function up()
    {
        Schema::create('elon_elon-catalog_products', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('elon_elon-catalog_products');
    }

}
