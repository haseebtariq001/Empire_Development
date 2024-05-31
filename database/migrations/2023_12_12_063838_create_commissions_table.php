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
        Schema::create('commissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_units')->nullable();
            $table->foreign('client_units')->references('id')->on('client_units');
            $table->unsignedBigInteger('earn_by')->nullable();
            $table->foreign('earn_by')->references('id')->on('users');

            $table->string('commission_percent', 255);
            $table->integer('amount');
            $table->date('sold_on')->default('2023-10-23');
            $table->enum('status', ['Approved', 'Rejected', 'In Progress'])->default('In Progress');
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
        Schema::dropIfExists('commissions');
    }
};
