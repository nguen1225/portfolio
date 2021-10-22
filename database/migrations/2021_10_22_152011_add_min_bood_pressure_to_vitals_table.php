<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMinBoodPressureToVitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vitals', function (Blueprint $table) {
            $table->integer('min_blood_pressure')->nullable();
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
            $table->integer('min_blood_pressure')->nullable();
        });
    }
}
