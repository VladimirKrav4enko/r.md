<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'vacancies',
            function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('company_name');
                $table->foreignId('city_id');
                $table->foreignId('category_id');
                $table->foreignId('experience_id');
                $table->foreignId('education_id');
                $table->integer('salary')->nullable();
                $table->text('description');
                $table->string('phone')->nullable();
                $table->string('email')->nullable();
                $table->timestamps();

                $table->foreign('city_id')->references('id')->on('cities');
                $table->foreign('category_id')->references('id')->on('categories');
                $table->foreign('experience_id')->references('id')->on('experiences');
                $table->foreign('education_id')->references('id')->on('education');
                $table->index('created_at');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancies');
    }
}
