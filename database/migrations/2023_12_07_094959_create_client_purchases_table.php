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
        Schema::create('client_purchases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('unit_id');
            $table->foreign('unit_id')->references('id')->on('project_units');
            $table->unsignedBigInteger('installment_plan_id');
            $table->foreign('installment_plan_id')->references('id')->on('installment_plans');
            $table->unsignedBigInteger('client_id'); 
            $table->foreign('client_id')->references('id')->on('users');
            $table->enum('purchase_status', ['Pending', 'Completed', 'Cancelled']); 
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
        Schema::dropIfExists('client_purchases');
    }
};
