<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToUimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('PL_UIMAGES', function(Blueprint $table)
        {
            $table->foreign('user_id', 'fk_uimages_users1')->references('id')->on('PL_USERS')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('PL_UIMAGES', function(Blueprint $table)
        {
            $table->dropForeign('fk_uimages_users1');
        });
    }
}
