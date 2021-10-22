<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnBloodPressureToVitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vitals', function (Blueprint $table) {
            $table->dropColumn('blood_pressure')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vitals', function (Blueprint $table) {
            $table->integer('blood_pressure')->nullable();
        });
    }
}
