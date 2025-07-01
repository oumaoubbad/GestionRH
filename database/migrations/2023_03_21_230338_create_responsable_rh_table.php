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
        Schema::create('responsable_rh', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->char('sexe');
            $table->date('date_naissance');
            $table->string('tel');     //->nullable(); cette champs est optionnelle
            $table->string('nationalite');

            $table->string('email')->unique();
            $table->string('adresse');

            $table->date('dateDembauche');
            $table->string('poste');
            $table->float('salaire');
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
        Schema::dropIfExists('responsable_rh');
    }
};
