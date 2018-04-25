<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXrefSubdistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xref_subdistricts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('name');
            $table->string('ddsa_code')->index();
            $table->tinyInteger('level')->default(1)->index(); // 1 = mukim; 2 = bandar; 3 = pekan;
            $table->integer('xref_district_id')->unsigned();
            $table->timestamp('active_at')->nullable();
            $table->softDeletes();
            $table->timestamps();

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
        Schema::dropIfExists('xref_subdistricts');
    }
}
