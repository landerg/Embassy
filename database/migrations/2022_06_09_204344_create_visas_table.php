<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visas', function (Blueprint $table) {
            $table->id();
            $table->enum('passport_type', ['passport', 'id-passport']);
            $table->string('passport_no', '8')->unique()->index();
            $table->string('country_code', '10');
            $table->string('first_name', '255');
            $table->string('given_name', '255');
            $table->date('birth_date');
            $table->string('birth_place', 255);
            $table->enum('sex', ['male', 'female']);
            $table->date('issue');
            $table->date('expire');
            $table->string('authory', 4);
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
        Schema::dropIfExists('visas');
    }
}
