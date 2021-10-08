<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name', 35);
            $table->string('middle_name', 35);
            $table->string('last_name', 35);
            $table->string('position', 35);
            $table->date('dob');
            $table->string('company', 150);
            $table->string('phone', 150);
            $table->string('email', 75)->nullable();
            $table->tinyText('address');
            $table->string('area_code', 150);
            $table->foreignId('country_id');
            $table->foreignId('state_id');
            $table->foreignId('city_id');
            $table->tinyText('notes');
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
        Schema::dropIfExists('leads');
    }
}
