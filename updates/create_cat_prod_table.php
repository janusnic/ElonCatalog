<?php namespace Elon\Catalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCategoryProductItemTable extends Migration
{

    public function up()
    {
        Schema::dropIfExists('elon_catalog_cat_prod');

        Schema::create('elon_catalog_cat_prod', function($table)
        {
            $table->engine = 'InnoDB';

            $table->integer('product_item_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->timestamps();

            $table->primary(['product_item_id', 'category_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('elon_catalog_cat_prod');
    }

}
