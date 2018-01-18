<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('tel');
            $table->string('postal_code');
            $table->string('address');
            $table->string('access');
            $table->string('business_day_of_the_week');
            $table->string('business_time');
            $table->integer('budget_of_day');
            $table->integer('budget_of_night');
            $table->integer('number_of_sheets');
            $table->tinyInteger('has_pricate_room');
            $table->integer('can_smoking');
            $table->text('etc');
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
        Schema::dropIfExists('stores');
    }
}
