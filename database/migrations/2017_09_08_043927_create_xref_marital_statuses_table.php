<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXrefMaritalStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xref_marital_statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('name');
            $table->string('ddsa_code')->index();
            $table->integer('xref_gender_id')->unsigned()->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('xref_gender_id')->references('id')->on('xref_genders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xref_marital_statuses');
    }
}
