<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('campany_name')->default('laravel_pos');
            $table->string('campany_address')->default('laravel_pos address');
            $table->string('campany_phone')->default('34442233');
            $table->string('campany_email')->default('laravel_pos@gmail.com');
            $table->string('campany_fax')->default('+3434344');
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
        Schema::dropIfExists('companies');
    }
}
