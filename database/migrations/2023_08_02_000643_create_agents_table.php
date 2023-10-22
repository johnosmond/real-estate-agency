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

            $table->unsignedInteger('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('first_name');
            $table->string('last_name');
            $table->string('mobile_phone')->nullable();
            $table->string('email')->nullable();
            
            $table->timestamps();
            $table->softDeletes();

            $table->index(['last_name', 'first_name'], 'agent_name_sort');
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
