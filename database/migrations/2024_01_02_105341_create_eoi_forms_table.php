<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eoi_forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('unit_project_id')->nullable();
            $table->foreign('unit_project_id')->references('id')->on('unit_projects');

            $table->unsignedBigInteger('unit_id')->nullable();
            $table->foreign('unit_id')->references('id')->on('project_units');

            $table->string('email'); 
            $table->string('fname') ;
            $table->string('country');
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('address');
            $table->string('nationality');
            $table->string('passport_no');

            $table->integer('amount');
            $table->foreignId('payment_id')->constrained();
            $table->string('file')->nullable();
            $table->boolean('is_signed')->default(false);
            $table->enum('status', ['complete', 'pending', 'Rejected'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eoi_forms');
    }
};
