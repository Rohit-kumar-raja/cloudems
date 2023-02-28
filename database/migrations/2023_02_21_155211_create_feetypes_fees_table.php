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
            $table->unsignedBigInteger('fee_headtype')->nullable();
            $table->foreign('br_id')->references('id')->on('branches_faculties');
            $table->foreign('fee_collection_id')->references('id')->on('feecollectiontypes');
            $table->foreign('fee_category')->references('id')->on('feecategory_feecategories');
            // $table->foreign('fee_headtype')->references('id')->on('modules');
            $table->unique(['fee_category', 'f_name', 'br_id', 'fee_collection_id']);

            $table->timestamps();

            //fee_category = id from feecategory table
            // f_name = exam fee, tuition fee etc.from csv feehead column
            // Collection_id = id from feecollectiontype table
            // br_id = id from branches table (br_id is  branch id)
            // Seq_id  is a number which is same  for each fname irrespective of branch (ex: tution fee =1 where ever we have tuition fee it is 1 irrespective of branch)
            // Fee_type_ledger is same as fname
            // Fee_head_type = module id from module table (1-academic,11-academic misc,2-hostel etc)

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
