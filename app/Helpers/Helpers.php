<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
define("PAGELIST","liste");
define("PAGEEDITFORM","edit");
define("PAGECREATEFORM","create");
define("DEFAULTPASSWORD","password");
define("PAGESHOWUSER","show");


// recuperer le nom et le prenom d un user
function userFullName(){
return Auth::user()->name ;

}

//recuperer les roles d un  user
function getRolesName(){
    $rolesName = "";
    $i = 0;
    foreach(auth()->user()->roles as $role){
        $rolesName .= $role->role;

        //
        if($i < sizeof(auth()->user()->roles) - 1 ){
            $rolesName .= ",";
        }

        $i++;
    }

    return $rolesName;
}






function setMenuClass($route, $classe){
    $routeActuel = request()->route()->getName();

    if(contains($routeActuel, $route) ){
        return $classe;
    }
    return "";
}
//change la couleur de menu
function setMenuActive($route){
    $routeActuel = request()->route()->getName();

    if($routeActuel === $route ){
        return "active";
    }
    return "";
}



function contains($container, $contenu){
    return Str::contains($container, $contenu);
}
