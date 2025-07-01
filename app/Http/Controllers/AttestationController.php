<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attestation;


use App\Models\Reclamation;


define('STATUT_EN_ATTENTE', 0);
define('STATUT_ACCEPTE', 1);
define('STATUT_REFUSE', 2);
class AttestationController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
            $attestations = Attestation::latest()->paginate(6);
             return view('attestation.index')->with([
                'attestations'=>$attestations     // send les variables to view
        ]);
    }


    public function lister()
    {
            $attestations = Attestation::latest()->paginate(6);
             return view('attestation.list')->with([
                'attestations'=>$attestations     // send les variables to view
        ]);
    }

    public function listerR()
    {
            $attestations = Attestation::latest()->paginate(6);
             return view('attestation.listR')->with([
                'attestations'=>$attestations     // send les variables to view
        ]);
    }


    public function approve(Request $request,$id)
    {


        $attestation = Attestation::find($id);

       if($attestation){
           $attestation->statut = $request -> approve;
           $attestation->save();
           return redirect()->back();
       }
    }





    public function indexE()
    {
            $attestations = Attestation::latest()->paginate(6);
             return view('attestation.indexE')->with([
                'attestations'=>$attestations     // send les variables to view
        ]);
    }

    public function create(){
        return view('attestation.demandeDocument');
     }

    public function store(Request $request){    //envoyer les donnees (n3amro les input dual Annonce w nsayftohom BD)
     $this->validate($request, [
                  'type' =>'required',
                  'date' => 'required',

               ]);

             $attestation = new Attestation();
              $attestation ->user_id=auth()->user()->id;
              $attestation ->date=$request->date;
              $attestation ->type=$request->type;
              $attestation ->save();

             //utiliser pour afficher msj 'article ajouté' et
             // la redirection a la page d'article
                 return redirect()->route('attestation.list')->with([
                    'successs' => 'demande ajouté'
                ]);
        }



        public function delete($id){
            $attestation = Attestation::where('id',$id)->first();
            $attestation ->delete();
                 return redirect()->route('attestation.list')->with([
                          'success' => 'demande supprimé'
              ]);
        }
        public function deleteR($id){
            $attestation = Attestation::where('id',$id)->first();
            $attestation ->delete();

                 return redirect()->route('attestation.listR')->with([
                          'success' => 'demande supprimé'
              ]);
        }


        public function show($id){  //pour button do voir
            $attestation = Attestation::find($id);
            return view('attestation.show')->with([
               'attestation' =>$attestation
            ]);
             }



             public function travailAT($id){  //pour button do voir
                $attestation = Attestation::find($id);
                return view('attestation.attesttravail')->with([
                   'attestation' =>$attestation
                ]);
                 }

                 public function stageAT($id){  //pour button do voir
                    $attestation = Attestation::find($id);
                    return view('attestation.atteststage')->with([
                       'attestation' =>$attestation
                    ]);
                     }


                     public function formationAT($id){  //pour button do voir
                        $attestation = Attestation::find($id);
                        return view('attestation.attestformation')->with([
                           'attestation' =>$attestation
                        ]);
                         }


                         public function salaireAT($id){  //pour button do voir
                            $attestation = Attestation::find($id);
                            return view('attestation.attestsalaire')->with([
                               'attestation' =>$attestation
                            ]);
                             }




}
