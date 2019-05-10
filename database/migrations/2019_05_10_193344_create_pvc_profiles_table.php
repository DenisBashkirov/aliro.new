<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePvcProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('pvc_profiles'))
        {
            Schema::create('pvc_profiles', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->bigInteger('category_id')->unsigned();
                $table->integer('width')->comment('Ширина профиля');
                $table->integer('cameras')->comment('Количество камер');
                $table->decimal('thermistance', 3, 2)->comment('Теплоизоляция (теплосопротивление');
                $table->string('utp')->comment('Уникальность');
                $table->integer('ordering')->nullable();

                $table->foreign('category_id')->references('id')->on('pvc_profile_categories')->onDelete('cascade');
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
        Schema::dropIfExists('pvc_profiles');
    }
}
