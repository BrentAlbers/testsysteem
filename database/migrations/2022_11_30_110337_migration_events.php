<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Type\Decimal;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table){
            $table->id();
            $table->string("name");
            $table->string("photo");
            $table->dateTime("event_start");
            $table->dateTime("event_end");
            $table->unsignedInteger("available_tickets");
            $table->string("location");
            $table->decimal("price");
            $table->description("text");


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
