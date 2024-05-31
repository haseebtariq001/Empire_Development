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
        Schema::table('users', function (Blueprint $table) {
            $table->string('fname')->nullable()->after('name');
            $table->string('user_name')->after('fname');
            $table->string('country')->nullable()->after('user_name');
            $table->string('state')->nullable()->after('country');
            $table->string('city')->nullable()->after('state');
            $table->string('address')->nullable()->after('city');
            $table->string('mobile_no')->nullable()->after('address');
            $table->integer('created_by')->default(0)->after('is_enable_login');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('fname');
            $table->dropColumn('user_name');
            $table->dropColumn('country');
            $table->dropColumn('state');
            $table->dropColumn('city');
            $table->dropColumn('address');
            $table->dropColumn('mobile_no');
            $table->dropColumn('created_by');

        });
    }
};
