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
        Schema::create('dubai_companies', function (Blueprint $table) {
            $table->id();
            $table->string('office_no')->unique()->nullable();
            $table->string('company_name_en')->nullable();
            $table->string('company_name_arab')->nullable();
            $table->string('website')->nullable();
            $table->string('phone')->nullable()->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('dubai_companies');
    }
};
