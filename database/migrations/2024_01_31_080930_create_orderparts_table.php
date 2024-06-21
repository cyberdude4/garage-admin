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
        Schema::create('orderparts', function (Blueprint $table) {
            $table->id();
            $table->integer('order');
            $table->integer('part');
            $table->integer('vehicle');
            $table->integer('quantity');
            $table->decimal('cost');
            $table->integer('discount');
            $table->integer('tax');
            $table->enum('status', [0, 1])->default(1);
            $table->enum('deleted', [0, 1])->default(0);
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
        Schema::dropIfExists('orderparts');
    }
};
