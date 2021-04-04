<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateABrandPivotTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a_brand_pivot_transports', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('transport_id')->unsigned()->nullable();
            $table->foreign('transport_id')->references('id')->on('a_transports');

            $table->bigInteger('brand_id')->unsigned()->nullable();
            $table->foreign('brand_id')->references('id')->on('a_brands');

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
        Schema::table('a_brand_pivot_transports', function (Blueprint $table) {
            $table->dropForeign('a_brand_pivot_transports_transport_id_foreign');
            $table->dropForeign('a_brand_pivot_transports_brand_id_foreign');
        });

        Schema::dropIfExists('a_brand_pivot_transports');
    }
}
