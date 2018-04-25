<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXrefPostcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xref_postcodes', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('slug');
            $table->string('name');
            $table->integer('xref_state_id')->unsigned();
            $table->integer('xref_district_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('xref_state_id')->references('id')->on('xref_states');
            $table->foreign('xref_district_id')->references('id')->on('xref_districts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xref_postcodes');
    }
}
