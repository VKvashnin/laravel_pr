<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('year_id');
            $table->bigInteger('country_id')->nullable();
            $table->text('description');
            $table->string('image');
            $table->bigInteger('user_id');
            $table->bigInteger('updated_user_id');
            $table->timestamps();
        });

        Schema::table('movies', function (Blueprint $table){
            $table->foreign('year_id')
                ->references('id')
                ->on('year');

            $table->foreign('country_id')
                ->references('id')
                ->on('countries')
                ->onDelete('set null');

            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
