<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->string('township');
            $table->text('requirement');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('gender');
            $table->string('careerlevel');
            $table->integer('salary');
            $table->integer('exp_yrs');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('company_id');
            $table->integer('is_feature')->default('0');
            $table->integer('is_active')->default('1');
            $table->timestamps();

            $table->foreign('category_id')
                  ->references('id')->on('categories')
                  ->onDelete('cascade');

            $table->foreign('company_id')
                  ->references('id')->on('companies')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
