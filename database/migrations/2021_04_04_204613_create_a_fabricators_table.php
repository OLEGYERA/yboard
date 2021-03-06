<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAFabricatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a_fabricators', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('rtitle');
            $table->string('utitle');
            $table->string('alias');
            $table->integer('old_val');
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
        Schema::dropIfExists('a_fabricators');
    }
}
