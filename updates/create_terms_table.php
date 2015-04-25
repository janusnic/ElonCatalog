<?php namespace Elon\Catalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

/**
 * 
 * @author Denis Dolgopolov <dolgopolovdc@gmail.com>
 *
 */
class CreateTermsTable extends Migration
{

    public function up()
    {
        Schema::create('elon_catalog_terms', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('elon_catalog_terms');
    }

}
