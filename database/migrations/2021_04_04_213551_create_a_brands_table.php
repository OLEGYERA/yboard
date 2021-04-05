<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateABrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a_brands', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('alias')->unique();
            $table->integer('old_val');
            $table->bigInteger('fabricator_id')->unsigned()->nullable();
            $table->foreign('fabricator_id')->references('id')->on('a_fabricators');

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
        Schema::table('a_brands', function (Blueprint $table) {
            $table->dropForeign('a_brands_fabricator_id_foreign');
        });

        Schema::dropIfExists('a_brands');
    }
}
