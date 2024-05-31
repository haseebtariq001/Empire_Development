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
        Schema::table('agencies', function (Blueprint $table) {
            $table->string('brokage_signed_agreement')->nullable()->after('brokage_agreement');            
            $table->string('BA_uploaded_by')->nullable()->after('brokage_signed_agreement');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('agencies', function (Blueprint $table) {
            $table->dropColumn('brokage_signed_agreement');
            $table->dropColumn('BA_uploaded_by');
        });
    }
};
