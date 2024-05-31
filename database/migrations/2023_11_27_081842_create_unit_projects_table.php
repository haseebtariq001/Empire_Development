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
        Schema::create('unit_projects', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('slug', 255);
            $table->integer('total_floor');
            $table->integer('total_units');
            $table->string('location', 255);
            $table->string('booking_percentage')->nullable();
            $table->string('completion_percentage')->nullable();
            $table->string('installment_duration')->nullable();
            $table->string('installment_percentage')->nullable();
            $table->decimal('admin_fee', 8, 2)->nullable();
            $table->date('launch_date')->nullable();
            $table->string('image_file')->nullable();
            $table->string('status')->nullable();
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('unit_projects');
    }
};
