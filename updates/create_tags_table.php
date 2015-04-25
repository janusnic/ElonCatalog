<?php namespace Elon\Catalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateTagsTable extends Migration
{

    public function up()
    {
        Schema::create('elon_catalog_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->index()->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('elon_catalog_tags');
    }

}
