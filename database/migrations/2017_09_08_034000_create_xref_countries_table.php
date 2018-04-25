<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXrefCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xref_countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('name');
            $table->string('ddsa_code',3)->index();
            $table->string('alpha_2',2)->nullable();
            $table->string('alpha_3',3)->nullable();
            $table->string('olympic')->nullable();
            $table->string('fifa')->nullable();
            $table->string('currency_name')->nullable();
            $table->string('currency_alpha', 3)->nullable();
            $table->tinyInteger('currency_minor_decimal')->default(2);
            $table->string('capital')->nullable();
            $table->string('nationality')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->timestamp('active_at')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('xref_countries');
    }
}
