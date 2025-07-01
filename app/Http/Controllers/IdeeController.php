<?php

namespace App\Http\Controllers;
use App\Models\Idee;

use Illuminate\Http\Request;

class IdeeController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
              return view('idee.index')->with([
         ]);
    }


    public function store(Request $request){
        $this->validate($request, [
                       'description' => 'required',

                  ]);

                $idee = new Idee();
                 $idee ->user_id=auth()->user()->id;
                 $idee ->description=$request->description;
                $idee ->save();

                    return redirect()->route('idee.list')->with([
                             'successs' => 'demande ajouté'
                    ]);
           }




           public function liste()
{
    $idees = Idee::latest()->paginate(6);
    return view('idee.list', ['idees' => $idees]); // pass the variable to the view
}

public function listeR()
{
    $idees = Idee::latest()->paginate(6);
    return view('idee.listR', ['idees' => $idees]); // pass the variable to the view
}


public function delete($id){
    $idee = Idee::where('id',$id)->first();
    $idee ->delete();

         return redirect()->route('idee.list')->with([
                  'success' => 'demande supprimé'
      ]);
}



public function deleteR($id){
    $idee = Idee::where('id',$id)->first();
    $idee ->delete();

         return redirect()->route('idee.listR')->with([
                  'success' => 'demande supprimé'
      ]);
}





public function edit($id){  //pour button modifier
    $idee = Idee::find($id); // recuper le idee mn table idee et
     return view('idee.edit')->with([ // nsayftoh n page edit
     'idee' =>$idee
     ]);
     }




    public function update(Request $request, $id){

$this->validate($request, [
    'description' =>'required|min:10',
  ]);
        $idee = Idee::find($id);
         $idee ->description= $request->description;
         $idee ->save();
             return redirect()->route('idee.list')->with([
                      'successs' => 'article modifié'
          ]);
   }


}
