<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core__settings_companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('website');
            $table->string('phone');
            $table->string('address');
            $table->string('landing_page');
            $table->string('offline_page');
            $table->string('thank_page');
            $table->string('logo');
            $table->string('use_logo');
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
        Schema::drop('core__settings_companies');
    }
}
