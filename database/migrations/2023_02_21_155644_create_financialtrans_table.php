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
        Schema::create('financialtrans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id')->nullable();
            $table->bigInteger('tranid');
            $table->string('admno');
            $table->double('amount');
            $table->string('crdr', 10);
            $table->date('tran_date');
            $table->string('acad_year');
            $table->integer('entry_mode');
            $table->integer('voucherno');
            $table->unsignedBigInteger('br_id');
            $table->integer('type_of_concession');
            $table->timestamps();
            $table->foreign('br_id')->references('id')->on('branches_faculties');
            $table->foreign('module_id')->references('id')->on('modules');
            $table->unique(['admno']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financialtrans');
    }
};
