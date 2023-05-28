<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->id();

            // start and end date
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();


            // total price
            $table->integer('total_consume')->nullable();
            //status
            $table->string('status')->default('available');

            // relation to rent and user
            $table->foreignId('car_id')->constrained();
            $table->foreignId('user_id')->constrained();

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
        Schema::dropIfExists('rents');
    }
};
