<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a_models', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('alias');
            $table->integer('old_val');

            $table->bigInteger('brand_pivot_transport_id')->unsigned();
            $table->foreign('brand_pivot_transport_id')->references('id')->on('a_models');

            $table->bigInteger('parent_id')->unsigned()->nullable();
            $table->boolean('hasChild')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('a_models', function (Blueprint $table) {
            $table->dropForeign('a_models_brand_pivot_transport_id_foreign');
        });

        Schema::dropIfExists('a_models');
    }
}
