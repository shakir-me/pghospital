<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('reporter_name')->nullable();
            $table->string('reporter_email')->nullable();
            $table->string('reporter_phone')->nullable();
            $table->string('reporter_post_code')->nullable();
            $table->string('reporter_by')->nullable();
            $table->string('division_id')->nullable();
            $table->string('distric_id')->nullable();
            $table->string('hospital_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('post_code')->nullable();
            $table->string('gender')->nullable();
            $table->string('age')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('hospital_name')->nullable();
            $table->string('department_id')->nullable();
            $table->string('prescription_window')->nullable();
            $table->string('noa')->nullable();
            $table->string('no_of_other')->nullable();
            $table->string('medicine_id')->nullable();
            $table->string('generic_name')->nullable();
            $table->string('company')->nullable();
            $table->string('dose')->nullable();
            $table->string('unit')->nullable();
            $table->string('medicine_price')->nullable();
            $table->string('medicine_used')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('image')->nullable();
            $table->string('file')->nullable();
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
        Schema::dropIfExists('reports');
    }
}
