<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHelpTopicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets__helptopics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('topic');
            $table->string('parent_topic');
            $table->integer('custom_form')->unsigned()->nullable()->index('custom_form');
            $table->integer('department')->unsigned()->nullable()->index('department');
            $table->integer('tickets__statuses')->unsigned()->nullable()->index('tickets__statuses');
            $table->integer('priority')->unsigned()->nullable()->index('priority');
            $table->integer('tickets__slaplans')->unsigned()->nullable()->index('tickets__slaplans');
            $table->string('thank_page');
            $table->string('ticket_num_format');
            $table->string('internal_notes');
            $table->boolean('status');
            $table->boolean('type');
            $table->integer('auto_assign')->unsigned()->nullable()->index('auto_assign_2');
            $table->boolean('auto_response');
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
        Schema::drop('tickets__helptopics');
    }
}
