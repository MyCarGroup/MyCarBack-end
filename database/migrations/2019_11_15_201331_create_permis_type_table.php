<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermisTypeTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('permis_type')) {
            Schema::create('permis_type', function (Blueprint $table) {
                $table->increments('id');
                $table->string('label');
                $table->string('h_drive_price');
                $table->string('h_code_price');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('permis_type');
    }
}
