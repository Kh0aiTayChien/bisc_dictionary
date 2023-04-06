<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeClasssesInWordsTable extends Migration
{
    public function up()
    {
        Schema::table('words', function (Blueprint $table) {
            $table->string('classes',50)->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('words', function (Blueprint $table) {
            $table->string('classes',50)->change();
        });
    }
}
