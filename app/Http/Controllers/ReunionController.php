<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ParticipantsEmail;

use App\Models\Reunion;
use Illuminate\Http\Request;

class ReunionController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
        // $Annonces = Annonce::all();  //recuperer touts les Annoncees
        // $Annonces = Annonce::orderBy('title', 'DESC')->get();  // retourner les Annonces ordoner par alphabet
        // $Annonces = Annonce::latest()->get();(dernier Annonce va afficher au debut de page)



            $reunions = Reunion::latest()->paginate(6); // recuperer 9 Annoncees
             return view('reunion.index')->with([
                'reunions'=>$reunions     // send les variables to view
        ]);
    }



    public function indexE()
    {
        // $Annonces = Annonce::all();  //recuperer touts les Annoncees
        // $Annonces = Annonce::orderBy('title', 'DESC')->get();  // retourner les Annonces ordoner par alphabet
        // $Annonces = Annonce::latest()->get();(dernier Annonce va afficher au debut de page)



            $reunions = Reunion::latest()->paginate(6); // recuperer 9 Annoncees
             return view('reunion.indexE')->with([
                'reunions'=>$reunions     // send les variables to view
        ]);
    }




    public function delete($id){
        $reunion = Reunion::where('id',$id)->first();
        $reunion ->delete();

             return redirect()->route('reunion.index')->with([
                      'success' => 'reunion supprimé'
          ]);
    }

    public function deleteE($id){
        $reunion = Reunion::where('id',$id)->first();
        $reunion ->delete();

             return redirect()->route('reunion.indexE')->with([
                      'success' => 'reunion supprimé'
          ]);
    }



// //les 2 fonctions create et store utilisees pour ajouter un Annonce
 public function create(){  //pour afficher/retourner la forme (kat aficher lina page li fiha forme dajouter Annoncee)
   return view('reunion.create');
}




 public function store(Request $request){    //envoyer les donnees (n3amro les input dual Annonce w nsayftohom BD)


$this->validate($request, [
    'titre' =>'required|min:3|max:100',
    'type' =>'required|min:3',
    'date_reunions' =>'required',
           'heure_reunions' =>'required',
          ]);

          $reunion = new Reunion;
          $reunion->titre = $request->input('titre');
          $reunion->type = $request->input('type');
          $reunion->date_reunions = $request->input('date_reunions');
          $reunion->heure_reunions = $request->input('heure_reunions');
          $reunion->lieu = $request->input('lieu');

          $reunion->save();

          // Récupération des adresses e-mail des participants
          $participantsEmails = explode(',', $request->input('participants'));

          // Envoi de l'e-mail aux participants
          $reunionData = [
              'titre' => $reunion->titre,
              'date' => $reunion->date_reunions,
              'heure' => $reunion->heure_reunions,
              'lieu' => $reunion->lieu
          ];
          foreach ($participantsEmails as $email) {
            Mail::to(trim($email))->send(new ParticipantsEmail($reunionData));
        }

    // Redirection ou message de succès


            return redirect()->route('reunion.index')->with([
                     'successs' => 'reunion ajouté'
            ]);
   }



//      //pour modifier un Annonce on a besoin de 2 fonctions edit/
//      //edit recupere le Annonce pour le modifier
  public function edit($id){  //pour button modifier
    $reunion = Reunion::find($id); // recuper le Annonce mn table Annonce et
     return view('reunion.edit')->with([ // nsayftoh n page edit
     'reunion' =>$reunion
     ]);
     }




    public function update(Request $request, $id){
        $this->validate($request, [
            'titre' =>'required|min:3|max:100', //required :titre ne doit pas etre vide
            'type' =>'required|min:3',
            'date_reunions' =>'required', //required :titre ne doit pas etre vide
                   'heure_reunions' =>'required',
                  ]);

        $reunion = Reunion::find($id);
        // $Annonce ->image= "https://cdn.pixabay.com/photo/2016/11/08/04/49/jungle-1807476__340.jpg";
        $reunion ->titre=$request->titre;
        $reunion ->type=$request->type;
        $reunion ->date_reunions=$request->date_reunions;
        $reunion ->heure_reunions=$request->heure_reunions;
         $reunion ->save();
             return redirect()->route('reunion.index')->with([
                      'successs' => 'reunion modifié'
          ]);
   }



}
