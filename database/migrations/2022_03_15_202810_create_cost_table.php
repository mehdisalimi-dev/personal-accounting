<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cost', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cost_category_id');
            $table->string('amount');
            $table->timestamps();
            $table->foreign('cost_category_id')->references('id')->on('cost_category');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cost');
    }
};
