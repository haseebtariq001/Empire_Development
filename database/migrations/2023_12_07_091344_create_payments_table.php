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
        Schema::table('payments', function (Blueprint $table) {
            $table->unsignedBigInteger('installment_plan_id')->nullable();
            $table->foreign('installment_plan_id')->references('id')->on('installment_plans');
            $table->integer('account_id')->nullable()->change();
            $table->integer('vendor_id')->nullable()->change();
            $table->longText('description')->nullable()->change();
            $table->integer('category_id')->nullable()->change();
            $table->string('payment_method')->change();
            $table->string('payment_status')->after('payment_method');
            $table->string('currency')->after('payment_status')->default('aed');

            $table->string('reference')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropForeign('payments_installment_plan_id_foreign');
            $table->dropColumn('installment_plan_id');
            $table->integer('account_id')->change();
            $table->integer('vendor_id')->change();
            $table->longText('description')->change();
            $table->integer('category_id')->change();
            $table->integer('payment_method')->change();
            $table->dropColumn('payment_status');
            $table->dropColumn('currency');
            $table->string('reference')->change();

        });
    }
};
