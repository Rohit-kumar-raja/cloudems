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
            $table->unsignedBigInteger('module_id')->nullable();
            $table->double('amount');
            $table->unsignedBigInteger('head_id');
            $table->string('crdr', 10);
            $table->unsignedBigInteger('br_id');
            $table->string('head_name');
            $table->timestamps();
            $table->foreign('br_id')->references('id')->on('branches_faculties');
            $table->foreign('module_id')->references('id')->on('modules');
            $table->foreign('head_id')->references('id')->on('feetypes_fees');

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
