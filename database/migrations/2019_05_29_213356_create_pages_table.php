<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('pages'))
        {
            Schema::create('pages', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name')->unique();
                $table->string('slug')->unique();
                $table->string('urn')->unique();
                $table->string('title')->nullable();
                $table->string('h1');
                $table->string('subhead')->nullable();
                $table->string('meta_description')->nullable();
                $table->bigInteger('category_id')->unsigned()->nullable();

                $table->foreign('category_id')->references('id')->on('pages_categories')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::dropIfExists('pages');
    }
}
