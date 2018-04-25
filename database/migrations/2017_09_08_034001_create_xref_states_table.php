<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXrefStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xref_states', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('name');
            $table->string('name_long');
            $table->string('ddsa_code')->index();
            $table->string('alpha_2');
            $table->string('alpha_3');
            $table->string('capital');
            $table->integer('xref_country_id')->unsigned();
            $table->timestamp('active_at')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('xref_country_id')->references('id')->on('xref_countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xref_states');
    }
}
