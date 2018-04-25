<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXrefCustomDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xref_custom_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('name');
            $table->string('param_1')->nullable();
            $table->string('param_2')->nullable();
            $table->string('param_3')->nullable();
            $table->string('param_4')->nullable();
            $table->string('param_5')->nullable();
            $table->integer('xref_custom_category_id')->unsigned()->nullable();
            $table->integer('xref_custom_datum_id')->unsigned()->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('xref_custom_category_id')->references('id')->on('xref_custom_categories');
            $table->foreign('xref_custom_datum_id')->references('id')->on('xref_custom_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xref_custom_data');
    }
}
