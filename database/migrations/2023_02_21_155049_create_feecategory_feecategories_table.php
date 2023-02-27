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
        Schema::create('feecategory_feecategories', function (Blueprint $table) {
            $table->id();
            $table->string('fee_category');
            $table->string('description');
            $table->unsignedBigInteger('br_id');
            $table->foreign('br_id')->references('id')->on('branches_faculties');
            $table->unique(['fee_category', 'br_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feecategory_feecategories');
    }
};
