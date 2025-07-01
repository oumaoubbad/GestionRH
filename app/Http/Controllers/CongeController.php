<?php

namespace App\Http\Controllers;
use App\Models\User;

use App\Models\Conge;
use Illuminate\Http\Request;
define('STATUT_EN_ATTENTE', 0);
define('STATUT_ACCEPTE', 1);
define('STATUT_REFUSE', 2);


class CongeController extends Controller

{

    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
        //
        $conges = Conge::latest()->paginate(4); // recuperer 9 Annoncees
        return view('conge.index')->with([
           'conges'=>$conges     // send les variables to view
   ]);

    }




    public function indexE()
    {
        //
        $conges = Conge::latest()->paginate(4); // recuperer 9 Annoncees
        return view('conge.indexE')->with([
           'conges'=>$conges
        // return View("conge.indexE")->with([
        //     'conges' => Conge::all()]);
    ]);
    }






    public function show($id){  //pour button do voir
        $conge = Conge::find($id);
        return view('conge.show')->with([
           'conge' =>$conge
        ]);
         }



    public function create(){  //pour afficher/retourner la forme (kat aficher lina page li fiha forme dajouter Annoncee)
        return view('conge.create');
     }


      public function store(Request $request){    //envoyer les donnees (n3amro les input dual Annonce w nsayftohom BD)



     $this->validate($request, [
                  'date_debut' =>'required',
                  'date_fin' => 'required|after:date_debut',
                 'type' =>'required',
                 'duree' =>'required',
               ]);

             $conge = new Conge();
              $conge ->user_id=auth()->user()->id;
              $conge ->date_debut=$request->date_debut;
             $conge ->date_fin=$request->date_fin;
             $conge ->type=$request->type;
             $conge ->duree=$request->duree;
             $conge ->save();

             //utiliser pour afficher msj 'article ajouté' et
             // la redirection a la page d'article
                 return redirect()->route('conge.indexE')->with([
                          'successs' => 'demande ajouté'
                 ]);
        }



        public function delete($id){
            $annonce = Conge::where('id',$id)->first();
            $annonce ->delete();

                 return redirect()->route('conge.index')->with([
                          'success' => 'demande supprimé'
              ]);
        }




   public function deleteE($id){
    $annonce = Conge::where('id',$id)->first();
    $annonce ->delete();

         return redirect()->route('conge.indexE')->with([
                  'success' => 'demande supprimé'
      ]);
}



public function approve(Request $request,$id)
{


    $conge = Conge::find($id);

   if($conge){
       $conge->statut = $request -> approve;
       $conge->save();
       return redirect()->back();
   }
}


//     public function create($id)
//     {
//         //
//         return View("conge.create")->withUser(User::findOrFail($id));


//     }



//     public function store(Request $request)
//     {   Conge::create([
//         'user_id' => auth()->user()->id,
//         // 'voiture_id'=> $request->voiture_id,
//         'date_debut'=> $request->date_debut,
//         'date_fin'=> $request->date_fin,
//         'type'=> $request->type,
//         'statut'=> $request->statut,
//         'duree'=> $request->duree,
//         // 'description'=> $request->description,
//         // 'jour'=>$jours,

//     ]);
//     // $voiture->update([
//     //     'statut' => 1
//     // ]);

//     return redirect()->route('conge.index')
//                     ->with('success','réservation créée avec succès.');

// }





// public function show(Conge $conge)
//     {
//         //
//         return view('conge.show',compact('conge'));

//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(Conge $conge)
//     {

//         return view('conge.edit', compact('conge'));

//     }



//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, Conge $conge)
//     {
//         //
//         $input = $request->all();

//         $conge->update($input);

//         return redirect()->route('conge.index')
//                         ->with('success','réservation mise à jour avec succès');
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         //
//     }
//     public function approve(Request $request,$id)
//     {


//         $conge = Conge::find($id);

//        if($conge){
//            $conge->statut = $request -> approve;
//            $conge->save();
//            return redirect()->back();
//        }
//     }
}

