<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Mail\AdminMail;
use App\Models\Article;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Public Controller
|--------------------------------------------------------------------------
| Qui nel controller è dove metto la logica applicativa.
| 
*/

class PublicController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function chiSiamo() {      
        return view('chisiamo');
    }

    public function doveSiamo() {      
        return view('dovesiamo');
    }

    public function contact(){
        return view('contact');
    }

    public function submit(StoreRequest $request){      // Dependency Injection
        //dd($request->all);

        // $email=$request->input("email");        // in input avrai la mia mail.
        // $name=$request->input("name");          // in input avrai il mio nome.
        // $message=$request->input("message");    // in input avrai il mio messaggio.
        // //dd($email, $name, $message);
        // $contact= compact("name", "message");   // è quello che arriva al cliente quando ha scritto.
        // $admin_mail = compact("email", "name", "message");   // è quello che arriva a me come amministratore.
        
        

        //  Metodo Save:
        $contact = new Contact();   // creo una variabile che è un oggetto.
        $contact->name = $request->input('name');  // chiedo: oggeto contact ($contact), all'interno dell'attributto name ($contact->name), inseriscimi il dato che sta nell'oggetto request ($request) e prendimi il valore che prendi dll'input che ha come nome 'name'. 
        $contact->email = $request->input('email'); 
        $contact->message = $request->input('message'); 
        $contact->save();   // prendi l'oggetto contact, vai nella tabella contacts e inserisci vari dati in base alla strutura nel modelo e nella tabella. I dati che hanno il nome 'name' saranno inseriti nella collona name, e così successivamente per tutti i dati.
        // dd($contact);

        Mail::to($contact->email)->send(new ContactMail($contact));
        Mail::to("admincarol@carol.it")->send(new AdminMail($contact));

        return redirect(route("home"))->with('message', 'Grazie per averci scritto. Il tuo messaggio è arrivato.');
    }

}


// REFACTORING del codice: modificare il codice dal punto di vista di scrittura ma non di comportamento. La funzionalità sarà la stessa.

// -> freccia singola per richiamare attributi o id, per accedere un attributo o un metodo.
// => freccieta doppia per assegnare la chiave valore, array associativi.