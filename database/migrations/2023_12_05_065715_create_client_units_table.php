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
        Schema::create('client_units', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('unit_project_id')->nullable();
            $table->foreign('unit_project_id')->references('id')->on('unit_projects');
      
            $table->unsignedBigInteger('unit_id')->nullable();
            $table->foreign('unit_id')->references('id')->on('project_units');


            $table->unsignedBigInteger('client_id')->nullable();
            $table->foreign('client_id')->references('id')->on('users');
            
            $table->unsignedBigInteger('sales_offer_id')->nullable();
            $table->foreign('sales_offer_id')->references('id')->on('sales_offers');

            $table->enum('status', [
                'Budget differs',
                'Follow up',
                'In progress',
                'Invalid inquiry',
                'Needs more info',
                'Closed Lost',
                'Not yet contacted',
                'Offer Sent',
                'Closed Won'
            ]);
            $table->string('cheque_file')->nullable();
            $table->boolean('is_deposit')->default(false);
            $table->timestamp('reservation_expiry')->nullable();
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
        Schema::dropIfExists('client_units');
    }
};
