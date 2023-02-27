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
        Schema::create('financialtrandetails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('financialTranId');
            $table->unsignedBigInteger('module_id');
            $table->double('amount');
            $table->unsignedBigInteger('head_id');
            $table->string('crdr', 10);
            $table->unsignedBigInteger('brid');
            $table->string('head_name');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financialtrandetails');
    }
};
