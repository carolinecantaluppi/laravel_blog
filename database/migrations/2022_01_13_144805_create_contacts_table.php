<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()    // della classe delle migrazioni, la funzione up deve essere sempre il contrario della funzione down o vice versa (deve essere un specchio).
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();   // la funzione id() crea una collona che accetta un dato POSITIVO, INTERO e AUTOINCREMENTALE.
            $table->string('name');  // voglio che accette il dato come una string e una colona che si chiami name.
            $table->string('email');    // string: accetta soltanto 255 carattere.
            $table->text('message');    // text: accetta più di 255 carattere.
            $table->timestamps();   // la funzione timestamps() crea due collone:
            // created_at (che serve per inserire la data di creazione del record (del database))
            // update_at (che serve per inserire la data di midifica del record).
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()  // ogni comenado di migrazione deve avere un comando de reversibilità. Se sto creando in up, sto destruggendo in down.
    {
        Schema::dropIfExists('contacts');   // Se esiste una tabella che si chiama contacts, eliminela.  (dropIfExists sta elliminando l'intera tabella contacts.)
    }
}
