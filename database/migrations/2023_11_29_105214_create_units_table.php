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
        Schema::create('project_units', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('unit_project_id')->nullable();
            $table->foreign('unit_project_id')->references('id')->on('unit_projects');
            $table->integer('unit_no');
            $table->string('unit_type');
            $table->integer('size')->nullable();
            $table->string('block_no')->nullable();
            // Apartment
            $table->string('apartment_view')->nullable();
            $table->string('apartment_type')->nullable();
            $table->integer('floor_number')->nullable();
            $table->string('key_plan')->nullable();
            $table->string('unit_plan')->nullable();

            $table->decimal('area')->nullable();
            $table->decimal('selling_price', 10, 2);
            $table->decimal('price_per', 10, 2)->nullable();
            $table->string('parking')->nullable();
            $table->string('floor_plan')->nullable();
            $table->enum('status',['Available', 'Reserved', 'Sold'])->default('Available');
            $table->boolean('is_eoi')->default(false);

            $table->decimal('on_booking', 10, 2)->nullable();
            $table->decimal('on_completion', 10, 2)->nullable();
            $table->decimal('installment', 10, 2)->nullable();

      
            $table->softDeletes();
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
        Schema::dropIfExists('units');
    }
};
