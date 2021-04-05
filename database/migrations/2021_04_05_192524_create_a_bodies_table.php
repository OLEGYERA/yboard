<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateABodiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a_bodies', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('EN_empty');
            $table->string('rtitle');
            $table->string('utitle');
            $table->string('alias');

            $table->bigInteger('transport_id')->unsigned();
            $table->foreign('transport_id')->references('id')->on('a_transports');

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
        Schema::table('a_bodies', function (Blueprint $table) {
            $table->dropForeign('a_bodies_transport_id_foreign');
        });


        Schema::dropIfExists('a_bodies');
    }
}
