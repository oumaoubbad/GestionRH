<?php

namespace App\Http\Controllers;
use App\Models\Info;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }



    public function index()
    {
        //
         return view('homeEmploye');

    }



    public function indexdash()
    {
        //
         return view('dashemploye');

    }






//     public function index()
//     {
//         //
//         $infos = Info::latest()->paginate(4); // recuperer 9 Annoncees
//         return view('homeEmplye')->with([
//            'infos'=>$infos     // send les variables to view
//    ]);

//     }
}
