<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        schema::table('articles', function(Blueprint $table){
            // Chiave esterna: inserito una collona nella tabella articles (user_id) ma che fa riferimento alla tabella users.
            
            // istruzione per creare la collona:
            $table->unsignedBigInteger('user_id')->after('img')->nullable();  // per dire che questa collona (user_id) che 
            // acceterà un dato senza segno, positivo e intero (come id). Scrivendo ->after('img') dico per 
            // inserire questa collona dopo la collona img.
        
            // istruzione che serve per CREARE IL VINCOLO DI INTEGRITÀ REFERENZIALE - (FOREING KEY CONSTRAINTS):
            $table->foreign('user_id')->references('id')->on('users');  // per dire che i numeri che entreranno 
            // in questa collona (user_id) e tutto che sarà una chiave esterna si riferiranno all'id che si trovano
            // sulla tabella users. Mettendo il colegamento il record della tabella user con i record della tabella
            // articles. Questo è il concetto referenziale.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){     // La funzione down serve per rendere le modifiche reversibili.
        schema::table('articles', function(Blueprint $table){
            $table->dropForeign(['user_id']); // Distruzione del vincolo. - prima di tutto cancellami il vincolo di integrità referenziale.
            $table->dropColumn(['user_id']); // Distruzione della collona. - elliminare ance la collona.
        });
    }
}
