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
        Schema::create('commonfeecollections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id');
            $table->unsignedBigInteger('trans_id');
            $table->string('admno');
            $table->string('rollno');
            $table->double('amount');
            $table->unsignedBigInteger('br_id');
            $table->string('acadamic_year');
            $table->string('financial_year');
            $table->string('display_receipt_no');
            $table->string('entry_mode');
            $table->date('paid_date');
            $table->boolean('inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commonfeecollections');
    }
};
