<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function($table) {
            $table->tinyInteger('add_api')->default(0)->after('quantity');
            $table->tinyInteger('remove_api')->default(0)->after('quantity');
            $table->tinyInteger('excluded')->default(0)->after('quantity');
            $table->tinyInteger('active')->default(1)->after('quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function($table) {
            $table->dropColumn('add_api');
            $table->dropColumn('remove_api');
            $table->dropColumn('excluded');
            $table->dropColumn('active');
        });
    }
}
