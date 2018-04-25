<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXrefDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xref_districts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('name');
            $table->string('ddsa_code')->index();
            $table->string('alpha_3');
            $table->integer('xref_state_id')->unsigned();
            $table->timestamp('active_at')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('xref_state_id')->references('id')->on('xref_states');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xref_districts');
    }
}
