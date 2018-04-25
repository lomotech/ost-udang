<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone_home')->nullable();
            $table->string('phone_office')->nullable();
            $table->string('phone_mobile')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('address_3')->nullable();
            // $table->string('xref_postcode_id')->nullable();
            // $table->string('xref_subdistrict_id')->nullable();
            // $table->string('xref_district_id')->nullable();
            // $table->string('xref_state_id')->nullable();
            // $table->string('xref_country_id')->nullable();
            $table->rememberToken();
            $table->boolean('is_pwd_expired')->default(0)->index();
            $table->timestamp('pwd_expired_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
