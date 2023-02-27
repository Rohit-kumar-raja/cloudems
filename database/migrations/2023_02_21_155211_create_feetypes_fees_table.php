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
        Schema::create('feetypes_fees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fee_category');
            $table->string('f_name');
            $table->unsignedBigInteger('fee_collection_id');
            $table->unsignedBigInteger('br_id');
            $table->integer('seq_id');
            $table->string('fee_type_ledger');
            $table->string('fee_headtype');
            $table->foreign('br_id')->references('id')->on('branches_faculties');
            $table->foreign('fee_collection_id')->references('id')->on('feecollectiontypes');
            $table->foreign('fee_category')->references('id')->on('feecategory_feecategories');
         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feetypes_fees');
    }
};
