<?php namespace Elon\Catalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateTagProductItemTable extends Migration
{

    public function up()
    {
        Schema::dropIfExists('elon_catalog_tag_prod');

        Schema::create('elon_catalog_tag_prod', function($table)
        {
            $table->engine = 'InnoDB';

            $table->integer('product_item_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            $table->timestamps();

            $table->primary(['product_item_id', 'tag_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('elon_catalog_tag_prod');
    }

}
