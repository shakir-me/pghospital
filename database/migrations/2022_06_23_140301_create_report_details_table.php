<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_details', function (Blueprint $table) {
            $table->id();
            $table->integer('report_id')->nullable();
            $table->integer('medicine_id')->nullable();
            $table->string('generic_name')->nullable();
            $table->string('company')->nullable();
            $table->string('dose')->nullable();
            $table->string('unit')->nullable();
            $table->string('medicine_price')->nullable();
            $table->string('medicine_used')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
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
        Schema::dropIfExists('report_details');
    }
}
