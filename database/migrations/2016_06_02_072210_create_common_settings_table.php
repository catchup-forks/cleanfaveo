<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommonSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core__settings_common', function (Blueprint $table) {
            $table->increments('id');
            $table->string('option_name');
            $table->string('option_value');
            $table->string('status');
            $table->string('optional_field');
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
        Schema::drop('core__settings_common');
    }
}
