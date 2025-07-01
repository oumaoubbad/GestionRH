<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        return view("users");
    }

    // public function show($id)
    // {
    //     $user = User::findOrFail($id); //récupère l'utilisateur correspondant à l'identifiant
    //     return view('utilisateurs.show', ['user' => $user]); //transmet l'utilisateur à la vue "show"
    // }

}
