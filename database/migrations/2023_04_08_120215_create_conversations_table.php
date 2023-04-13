<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConversationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('conversations', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger('contact_id');
             $table->foreign('contact_id')->references('id')->on('contacts');
             $table->text('body')->nullable();
             $table->string('SmsStatus')->nullable();
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
        Schema::dropIfExists('conversations');
    }
}
