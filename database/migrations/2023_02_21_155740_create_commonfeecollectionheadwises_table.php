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
        Schema::create('commonfeecollectionheadwises', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id')->nullable();
            $table->unsignedBigInteger('receipt_id');
            $table->unsignedBigInteger('head_id');
            $table->string('head_name');
            $table->unsignedBigInteger('br_id');
            $table->double('amount');
            $table->timestamps();
            $table->foreign('br_id')->references('id')->on('branches_faculties');
            $table->foreign('module_id')->references('id')->on('modules');
            $table->foreign('head_id')->references('id')->on('feecollectiontypes');
            $table->foreign('receipt_id')->references('id')->on('commonfeecollections');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commonfeecollectionheadwises');
    }
};
