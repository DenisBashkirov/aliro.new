<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePvcProfileCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('pvc_profile_categories'))
        {
            Schema::create('pvc_profile_categories', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->integer('ordering')->nullable();
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
        Schema::dropIfExists('pvc_profile_categories');
    }
}
