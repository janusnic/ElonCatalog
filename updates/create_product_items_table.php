<?php namespace Elon\Catalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

/**
 * 
 * @author Denis Dolgopolov <dolgopolovdc@gmail.com>
 *
 */
class CreateProductItemsTable extends Migration
{

    public function up()
    {
        Schema::create('elon_catalog_product_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->index();
            $table->string('slug')->index()->unique();
            $table->longText('description');
            $table->decimal('price', 10, 2)->default(0)->nullable();
            $table->boolean('is_enabled')->default(false);
            $table->boolean('is_stockable')->default(false);
            $table->integer('stock')->default(0)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('elon_catalog_product_items');
    }

}
