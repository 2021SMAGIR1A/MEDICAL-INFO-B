<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableIndividu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('individus', function (Blueprint $table) {
          $table->id();
          $table->string('name')->nullable();
          $table->string('prenom')->nullable();
          $table->date('birthday');
          $table->string('telephone')->nullable();
          $table->string('mail')->index();
          $table->string('password')->nullable();
          $table->string('statut')->nullable();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
