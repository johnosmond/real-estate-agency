<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agents', function (Blueprint $table) {

            $table->increments('id');

            $table->unsignedInteger('office_id');
            $table->foreign('office_id')->references('id')->on('offices');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('mobile_phone');
            $table->string('email');
            
            $table->timestamps();

            $table->index('office_id');
            $table->index(['last_name', 'first_name']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
