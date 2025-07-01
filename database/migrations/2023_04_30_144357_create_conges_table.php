<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conges', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('user_id');
            $table->text('type');
            $table->integer('duree');
            $table->date('date_debut');
            $table->date('date_fin');
            // $table->boolean('statut')->nullable();
            // $table->tinyInteger('statut')->default(0);

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
        Schema::dropIfExists('conges');
    }
};
