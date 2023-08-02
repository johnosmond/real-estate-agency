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
        Schema::create('offices', function (Blueprint $table) {

            $table->increments('id');

            $table->string('branch');
            $table->string('office_name');
            $table->string('location_address');
            $table->string('mailing_address');
            $table->string('main_phone');
            $table->string('fax_line');
            $table->string('company_email');

            $table->timestamps();

            $table->index('branch');
            $table->index('office_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offices');
    }
};
