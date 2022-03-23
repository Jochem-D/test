<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration {

    /**
     * Run the migrations.
     * @return void
     */
    public function up() {
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->text("message");
            $table->integer('order_id')->unsigned()->index()->nullable();
            // deze slaan we nog even over: $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->string('type', [])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down() {
        Schema::dropIfExists('notifications');
    }
}
