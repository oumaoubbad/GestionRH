<?php
namespace App\Http\Livewire;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;
use App\Models\Permission;
use App\Models\Role;
use Carbon\Carbon;

class Utilisateurs extends Component
{





    use WithPagination;
    protected $paginationTheme="Bootstrap";


    public $currentPage= PAGELIST;

    public $showUser = [];
    public $newUser = [];
    public $editUser = [];
    public $rolePermissions = [];
    public $search ="";




    public function render()
    {



        $query = User::query();
        $search = $this->search;
        // $searchcritere ="%".$this->search."%";

        $query->when($search != "", function($query) use($search){
            $searchTerms = explode(' ', $search);
            $query->where(function ($query) use ($searchTerms) {
                foreach ($searchTerms as $term) {
                    $query->where('name', 'like', '%'.$term.'%')
                          ->orWhere('prenom', 'like', '%'.$term.'%');
                }
            });
        });





Carbon::setLocale("fr");


        return view('livewire.utilisateurs.index',[
                "users"=> $query->latest()->paginate(15)    //user::  all ==recuperer les donnees de BD
                ])
        ->extends("layouts.master")
        ->section("content");

    }

   //traitement de bouton ajouter nouvel user (pour afficher la page de creation nv user)
   public function goToAddUser(){
    $this->currentPage=PAGECREATEFORM;

}

public function goToListUser(){
    $this->currentPage=PAGELIST;
    $this-> editUser = [];
    // $this-> showUser = [];

}

public function goToEditUser($id){

    $this->editUser = User::find($id)->toArray();   //recupere la form avel les donne de user li baghin nmodifyiwah
    // dump($this->editUser);
       $this->currentPage = PAGEEDITFORM;

      $this->populateRolePermissions();
   }




   public $user;
   public $showingUserDetails = false;
   public $showDetails;


   public function showUserDetails($id)
   {
       $this->currentPage=PAGESHOWUSER;
       $this->user = User::find($id);
       $this->showDetails = true;
   }



   //traitement de bouton entrgister nouvel user
public function addUser(){
    //verifier que les infos envoyées par le formulaire sont correctes
    $validationAttributes= $this->validate();


    $validationAttributes ["newUser"]['password']='password';
    //   $validationAttributes ["newUser"]['name']='allioui';
//  dump($validationAttributes);
    //ajouter nouvel user
          User::create($validationAttributes ["newUser"]);
          $this->newUser = [];
         $this->dispatchBrowserEvent("showSuccessMessage",  ["message"=>"utilisateura été créé avec succès!"]);
    }

    public function rules(){
        if($this->currentPage == PAGEEDITFORM){

              return [
                  'editUser.name' => 'required|min:3|max:255',
                  'editUser.prenom' => 'required|min:3|max:255',

                  'editUser.email' => ['required', 'email', Rule::unique("users", "email")->ignore($this->editUser['id']) ] ,
                  'editUser.tel' => ['required','numeric', Rule::unique("users", "tel")->ignore($this->editUser['id']) ]  ,

                  'editUser.sexe' => 'required',
                  'editUser.numeroPieceIdentite' => ['required', Rule::unique("users", "numeroPieceIdentite")->ignore($this->editUser['id']) ],



                'editUser.date_naissance' => 'required|date',
                'editUser.adresse' => 'required|min:3|max:255',
                'editUser.departement' => 'required',
                'editUser.poste' => 'required|min:3|max:255',
                'editUser.type_contrat' => 'required|min:3|max:255',
                'editUser.dateDembauche' => 'required|date',
              ];}

              return  [

                'newUser.name' => 'required|min:3|max:255',
                'newUser.prenom' => 'required|min:3|max:255',
                'newUser.email' => 'required |email|unique:users,email',
                'newUser.tel' => 'required|numeric|unique:users,tel',
                'newUser.sexe' => 'required',
                'newUser.numeroPieceIdentite' =>'required|unique:users,numeroPieceIdentite',

                'newUser.date_naissance' => 'required|date',
                'newUser.adresse' => 'required|min:3|max:255',
                'newUser.departement' => 'required',
                'newUser.poste' => 'required|min:3|max:255',
                'newUser.type_contrat' => 'required|min:3|max:255',
                'newUser.dateDembauche' => 'required|date',

            ];


          }






    // la boite de dialogue de SUPPRIMER UN USER
public function confirmDelete($name, $id){

        $this->dispatchBrowserEvent("showConfirmMessage", ["message"=> [
        "text" =>" Vous-êtes sur le point de supprimer $name de la liste des Employés.Voulez-vous continuer ?",
        "title"=>"Etes-vous sur de continuer?",
        "type"=>"warning",
        "data"=>[
            "user_id"=>$id
        ]
                ]]);

    }

    public function deleteUser($id){
    User::destroy($id);
    $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Employé supprimé avec succès!"]);

}


//modifier les infos d u  suer
public function updateUser(){
    // Vérifier que les informations envoyées par le formulaire sont correctes
    $validationAttributes = $this->validate();

    User::find($this->editUser["id"])->update($validationAttributes["editUser"]);

    $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Employé mis à jour avec succès!"]);

}

public function confirmPwdReset(){
    $this->dispatchBrowserEvent("showConfirmMessagePswrd", ["message"=> [
        "text" => "Vous êtes sur le point de réinitialiser le mot de passe de cet utilisateur. Voulez-vous continuer?",
        "title" => "Êtes-vous sûr de continuer?",
        "type" => "warning"
    ]]);
}



public function resetPassword(){

    User::find($this->editUser["id"])->update(["password" => Hash::make(DEFAULTPASSWORD )]);
    $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Mot de passe utilisateur réinitialisé avec succès!"]);
}












public function populateRolePermissions(){
    $this->rolePermissions["roles"] = [];
    $this->rolePermissions["permissions"] = [];


    $mapForCB = function($value){
        return $value["id"];
    };

    $roleIds = array_map($mapForCB, User::find($this->editUser["id"])->roles->toArray()); // [1, 2, 4]
    $permissionIds = array_map($mapForCB, User::find($this->editUser["id"])->permissions->toArray()); // [1, 2, 4]

    foreach(Role::all() as $role){
        if(in_array($role->id, $roleIds)){
            array_push($this->rolePermissions["roles"], ["role_id"=>$role->id, "role_name"=>$role->role, "active"=>true]);
        }else{
            array_push($this->rolePermissions["roles"], ["role_id"=>$role->id, "role_name"=>$role->role, "active"=>false]);
        }
    }

   foreach(Permission::all() as $permission){
        if(in_array($permission->id, $permissionIds)){
            array_push($this->rolePermissions["permissions"], ["permission_id"=>$permission->id, "name"=>$permission->nom, "active"=>true]);
        }else{
            array_push($this->rolePermissions["permissions"], ["permission_id"=>$permission->id, "name"=>$permission->nom, "active"=>false]);
        }
    }


    // la logique pour charger les roles et les permissions

}

public function updateRoleAndPermissions(){
    // supprimer tous les roles et les permission des utilisateurs
    DB::table("user_role")->where("user_id", $this->editUser["id"])->delete();
    DB::table("user_permission")->where("user_id", $this->editUser["id"])->delete();

    //attacher un role a un  user
    foreach($this->rolePermissions["roles"] as $role){
        if($role["active"]){
            User::find($this->editUser["id"])->roles()->attach($role["role_id"]);
        }
    }
//attache un user a une permission
    foreach($this->rolePermissions["permissions"] as $permission){
        if($permission["active"]){
            User::find($this->editUser["id"])->permissions()->attach($permission["permission_id"]);
        }
    }

    $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Role mis à jour avec succès!"]);


}




// public function showUserDetails($id)
// {
//     $this->currentPage=PAGESHOWUSER;
//     $this->user = User::find($id);
// }
// // public $currentPage;
// public $user;
// public $showingUserDetails = false;
// public function rendere()
//     {
//         return view('livewire.utilisateurs.show');
//             // ->extends('layouts.app');
//     }





}









