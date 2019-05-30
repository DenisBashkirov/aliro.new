<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavDropdownItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('nav_dropdown_items'))
        {
            Schema::create('nav_dropdown_items', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('text');
                $table->bigInteger('menu_item_id')->unsigned()->nullable();
                $table->bigInteger('parent_id')->unsigned()->nullable();
                $table->bigInteger('page_id')->unsigned()->nullable();
                $table->bigInteger('ordering')->nullable();

                $table->foreign('menu_item_id')->references('id')->on('nav_menu_items')->onDelete('restrict')->onUpdate('cascade');
                $table->foreign('parent_id')->references('id')->on('nav_dropdown_items')->onDelete('restrict')->onUpdate('cascade');
                $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('nav_dropdown_items');
    }
}
