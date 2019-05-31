<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLab1Tables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab1_tables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('glucosef')->nullable()->default(null);
            $table->text('glucoseppr')->nullable()->default(null);
            $table->text('urea')->nullable()->default(null);
            $table->text('creatinine')->nullable()->default(null);
            $table->text('suricacid')->nullable()->default(null);
            $table->text('cholesteroltotal')->nullable()->default(null);
            $table->text('triglyceride')->nullable()->default(null);
            $table->text('hdl')->nullable()->default(null);
            $table->text('ldl')->nullable()->default(null);
            $table->text('vldl')->nullable()->default(null);
            $table->text('bilirubintotal')->nullable()->default(null);
            $table->text('bilirubinconjugted')->nullable()->default(null);
            $table->text('alkalinephosphated')->nullable()->default(null);
            $table->text('sgpt')->nullable()->default(null);
            $table->text('sgot')->nullable()->default(null);
            $table->text('totalprotein')->nullable()->default(null);
            $table->text('albumin')->nullable()->default(null);
            $table->text('scalcium')->nullable()->default(null);
            $table->text('phosphorus')->nullable()->default(null);
            $table->text('amylase')->nullable()->default(null);
            $table->text('nasodium')->nullable()->default(null);
            $table->text('kpotassium')->nullable()->default(null);
            $table->text('ckmb')->nullable()->default(null);
            $table->text('urinemicroalbumin')->nullable()->default(null);
            $table->text('others')->nullable()->default(null);
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
        Schema::dropIfExists('lab1_tables');
    }
}
