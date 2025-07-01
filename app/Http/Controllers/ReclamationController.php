<?php

namespace App\Http\Controllers;
use App\Models\Reclamation;

use Illuminate\Http\Request;
use Svg\Tag\Rect;

define('STATUT_EN_ATTENTE', 0);
define('STATUT_ACCEPTE', 1);
define('STATUT_REFUSE', 2);
class ReclamationController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
        // $reclamations = Reclamation::latest()->paginate(6);

              return view('reclamation.reclamation')->with([
                // 'reclamations'=>$reclamations     // send les variables to view

         ]);
    }

    // public function create(){
    //     return view('attestation.reclamation');
    //  }


    public function store(Request $request){
        $this->validate($request, [
                     'type' =>'required',
                      'description' => 'required',

                  ]);

                $reclamation = new Reclamation();
                 $reclamation ->user_id=auth()->user()->id;
                 $reclamation ->type=$request->type;
                $reclamation ->description=$request->description;
                $reclamation ->save();

                return redirect()->route('reclamation.list')->with([

                             'successs' => 'demande ajouté'
                            //
                    ]);
           }




           public function liste()
{
    $reclamations = Reclamation::latest()->paginate(6);
    return view('reclamation.reclamationlist', ['reclamations' => $reclamations]); // pass the variable to the view
}


public function listeR()
{
    $reclamations = Reclamation::latest()->paginate(6);
    return view('reclamation.listR', ['reclamations' => $reclamations]); // pass the variable to the view
}






public function approve(Request $request,$id)
{


    $reclamation = Reclamation::find($id);

   if($reclamation){
       $reclamation->statut = $request -> approve;
       $reclamation->save();
       return redirect()->back();
   }
}

public function delete($id){
    $reclamation = Reclamation::where('id',$id)->first();
    $reclamation ->delete();

         return redirect()->route('reclamation.list')->with([
                  'success' => 'demande supprimé'
      ]);
}
public function deleteR($id){
    $reclamation = Reclamation::where('id',$id)->first();
    $reclamation ->delete();

         return redirect()->route('reclamation.listR')->with([
                  'success' => 'demande supprimé'
      ]);
}



// public function show($id){  //pour button do voir
//     $reclamation = Reclamation::find($id);
//     return view('reclamation.show')->with([
//        'reclamation' =>$reclamation
//     ]);
//      }



public function edit($id){  //pour button modifier
    $reclamation = Reclamation::find($id); // recuper le reclamation mn table reclamation et
     return view('reclamation.edit')->with([ // nsayftoh n page edit
     'reclamation' =>$reclamation
     ]);
     }




    public function update(Request $request, $id){

$this->validate($request, [
    'description' =>'required',
  ]);
        $reclamation = Reclamation::find($id);
         $reclamation ->description= $request->description;
         $reclamation ->save();
             return redirect()->route('reclamation.list')->with([
                      'successs' => 'article modifié'
          ]);
   }

}
