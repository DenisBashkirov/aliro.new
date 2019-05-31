<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavMenuItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('nav_menu_items'))
        {
            Schema::create('nav_menu_items', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('text')->unique();
                $table->bigInteger('page_id')->unsigned()->nullable();
                $table->string('dropdown_size')->nullable();
                $table->bigInteger('ordering')->nullable();

                $table->foreign('page_id')->references('id')->on('pages')->onDelete('restrict')->onUpdate('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nav_menu_items');
    }
}
