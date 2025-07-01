<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use App\Models\Annonce;

use Illuminate\Http\Request;

class annonceController extends Controller
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






            $annonces = Annonce::latest()->paginate(6); // recuperer 9 Annoncees
             return view('annonce.index')->with([
                'annonces'=>$annonces     // send les variables to view
        ]);
    }


    public function indexE()
    {
        // $Annonces = Annonce::all();  //recuperer touts les Annoncees
        // $Annonces = Annonce::orderBy('title', 'DESC')->get();  // retourner les Annonces ordoner par alphabet
        // $Annonces = Annonce::latest()->get();(dernier Annonce va afficher au debut de page)



            $annonces = Annonce::latest()->paginate(6); // recuperer 9 Annoncees
             return view('annonce.indexE')->with([
                'annonces'=>$annonces     // send les variables to view
        ]);
    }






    public function show($id){  //pour button do voir
        $annonce = annonce::find($id);
        return view('annonce.show')->with([
           'annonce' =>$annonce
        ]);
         }



         public function showE($id){  //pour button do voir
            $annonce = annonce::find($id);
            return view('annonce.showE')->with([
               'annonce' =>$annonce
            ]);
             }


             public function delete($id){
                $annonce = Annonce::where('id',$id)->first();
                $annonce ->delete();

                     return redirect()->route('annonce.index')->with([
                              'success' => 'article supprimé'
                  ]);
            }
            public function deleteE($id){
                $annonce = Annonce::where('id',$id)->first();
                $annonce ->delete();

                     return redirect()->route('annonce.indexE')->with([
                              'success' => 'article supprimé'
                  ]);
            }


// //les 2 fonctions create et store utilisees pour ajouter un Annonce
 public function create(){  //pour afficher/retourner la forme (kat aficher lina page li fiha forme dajouter Annoncee)
   return view('annonce.create');
}



  public function store(Request $request){    //envoyer les donnees (n3amro les input dual Annonce w nsayftohom BD)

$this->validate($request, [
            'titre' =>'required|min:3|max:100', //required :titre ne doit pas etre vide
           'description' =>'required|min:10',
          ]);

        $annonce = new Annonce();
        // $Annonce ->image=$request->image;
        $annonce ->titre=$request->titre;//title li jana mn lform kan3tiwah l Annonce title( $Annonce ->title(table Annonce li kina f BD))
        $annonce ->description=$request->description;
        $annonce ->save();

        //utiliser pour afficher msj 'article ajouté' et
        // la redirection a la page d'article
            return redirect()->route('annonce.index')->with([
                     'successs' => 'article ajouté'
            ]);
   }


  public function edit($id){  //pour button modifier
    $annonce = Annonce::find($id); // recuper le Annonce mn table Annonce et
     return view('annonce.edit')->with([ // nsayftoh n page edit
     'annonce' =>$annonce
     ]);
     }




    public function update(Request $request, $id){

$this->validate($request, [
    'titre' =>'required|min:3|max:100', //required :titre ne doit pas etre vide
   'description' =>'required|min:10',
  ]);
        $annonce = Annonce::find($id);
        // $Annonce ->image= "https://cdn.pixabay.com/photo/2016/11/08/04/49/jungle-1807476__340.jpg";
      $annonce ->titre= $request->titre;
       $annonce ->description= $request->description;
         $annonce ->save();
             return redirect()->route('annonce.index')->with([
                      'successs' => 'article modifié'
          ]);
   }





}
