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
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            // $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            $table->string('name');
            $table->string('prenom');
            $table->char('sexe')->nullable();
            $table->string('tel');     //->nullable(); cette champs est optionnelle
            $table->string('numeroPieceIdentite')->nullable();
             $table->date('date_naissance');//->default('1970-01-01');
            $table->string('adresse');     //->required()cette champs est obligatoire

           $table->string('departement')->nullable();
           $table->string('poste');
           $table->string('type_contrat');
           $table->date('dateDembauche');
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
        Schema::dropIfExists('employes');
    }
};
