<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AlterTicketSourceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('tickets__sources', 'css_class')) {
            Schema::table(
                'tickets__sources',
                function (Blueprint $table) {
                    $table->string('css_class');
                }
            );
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tickets__sources', function (Blueprint $table) {
            //
        });
    }
}
