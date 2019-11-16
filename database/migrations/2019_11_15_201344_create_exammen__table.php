<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExammenTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('exammen')) {
            Schema::create('exammen', function (Blueprint $table) {
                $table->increments('id');
                $table->string('permis_id');
                $table->string('type_examen_id');
                $table->string('candidate_id');
                $table->timestamp('date');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
    }
}
