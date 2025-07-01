<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\demandeDocument;

class demandeDocumentController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
              return view('attestation.demandeDocument')->with([
         ]);
    }


    public function store(Request $request){    //envoyer les donnees (n3amro les input dual Annonce w nsayftohom BD)
        $this->validate($request, [
                     'type' =>'required',
                    //  'date' => 'required',

                  ]);

                $demandeDocument = new demandeDocument();
                 $demandeDocument ->user_id=auth()->user()->id;
                //  $demandeDocument ->date=$request->date;
                 $demandeDocument ->type=$request->type;
                 $demandeDocument ->save();

                //utiliser pour afficher msj 'article ajouté' et
                // la redirection a la page d'article
                    return redirect()->route('attestation.list')->with([
                             'successs' => 'demande ajouté'
                    ]);
           }



}
