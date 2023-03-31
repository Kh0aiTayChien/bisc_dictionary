<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExampleFieldToWordsTable extends Migration
{

    public function up()
    {
        Schema::table('words', function (Blueprint $table) {
            $table->longText('example')->nullable();
        });
    }

    public function down()
    {
        Schema::table('words', function (Blueprint $table) {
            $table->dropColumn('example');
        });
    }
}
