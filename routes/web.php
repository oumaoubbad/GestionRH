<?php

use App\Http\Controllers\FullCalenderController;

use App\Http\Livewire\Utilisateurs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Livewire\ProfilComp;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\CongeController;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmationEmail;

use App\Mail\RefuseEmail;
use App\Mail\infoEmployé;
use App\Models\Candidat;

/*
|--------------------------------------------------------------------------
| Web Routes    <span class="w3-text-white" style="font-size:30px">Choisissez le poste auquel vous souhaitez envoyer votre demande</span>

|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!  me67   ou34 ni40 na62
|
*/
// Route::get('/envoyer-email', function (Request $request) {
//     $nom = $request->input('nom'); // Remplacez 'nom' par le nom du champ correspondant dans votre formulaire
//     $prenom = $request->input('prenom'); // Remplacez 'prenom' par le nom du champ correspondant dans votre formulaire

//     $candidat = (object) [
//         'nom' => $nom,
//         'prenom' => $prenom
//     ];

//     Mail::to('zineb.allioui473@campus.vinci.ac.ma')->send(new ConfirmationEmail($candidat));
//     return back()->with('success', 'Email envoyé avec succès');
// })->name('envoyer-email');

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/email/employé', function (Request $request) {
    Mail::to('zineb.allioui473@campus.vinci.ac.ma')->send(new infoEmployé());
    return back()->with('success', 'Email  envoyé avec succès');
});


//refuser candidat
Route::get('/email', function (Request $request) {
    Mail::to('candidatcandidat23@gmail.com')->send(new RefuseEmail());
    return back()->with('success', 'Email  envoyé avec succès');
});

//refuser candidat
Route::get('/envoyer-email', function (Request $request) {
    Mail::to('candidatcandidat23@gmail.com')->send(new ConfirmationEmail());
    return back()->with('success', 'Email  envoyé avec succès');
});







// Route::get('/envoyer-email', function () {
//      Mail::to('zineb.allioui473@campus.vinci.ac.ma')->send(new ConfirmationEmail());
//     return 'Email de confirmation envoyé avec success';
// });


Route::match(['get', 'post'], 'candidat/approve/{id}',  [App\Http\Controllers\CandidatController::class, 'approve'])->name('candidat.approve');


Route::get('/delete/candidat/{id}', [App\Http\Controllers\CandidatController::class, 'delete'])->name('candidat.delete'); //route de bouton supprimer

Route::get('/cv/download/{id}', [App\Http\Controllers\CandidatController::class, 'downloadCV'])->name('cv.downloadCV');


Route::get('/candidat/show/{id}', [App\Http\Controllers\CandidatController::class, 'show'])->name('candidat.show');

Route::match(['get', 'post'], '/candidat/index', [App\Http\Controllers\CandidatController::class, 'index'])->name('candidat.index');


Route::match(['get', 'post'], '/recrutement/ajouterCandidat', [App\Http\Controllers\CandidatController::class, 'ajouterCandidat'])->name('candidat.ajouterCandidat');
Route::match(['get', 'post'], '/addCandidat/recrutement', [App\Http\Controllers\CandidatController::class, 'storeCandidat'])->name('candidat.storeCandidat');





Route::match(['get', 'post'], '/recrutement/index', [App\Http\Controllers\RecrutementController::class, 'index'])->name('recrutement.index');

// Route::match(['get', 'post'],'/recrutement/createCand', [App\Http\Controllers\ShowRecrutementController::class, 'createCand'])->name('recrutement.createCand');
Route::match(['get', 'post'], '/recrutement/createCand/{recrutement_id}', [App\Http\Controllers\ShowRecrutementController::class, 'createCand'])->name('recrutement.createCand');


Route::match(['get', 'post'], '/recrutement/candidat/{id}', [App\Http\Controllers\RecrutementController::class, 'indexcand'])->name('recrutement.indexcand');

Route::match(['get', 'post'], '/recrutement/create', [App\Http\Controllers\RecrutementController::class, 'create'])->name('recrutement.create');
Route::match(['get', 'post'], '/add/recrutement', [App\Http\Controllers\RecrutementController::class, 'store'])->name('recrutement.store');

Route::match(['get', 'post'], '/edit/recrutement/{id}', [App\Http\Controllers\RecrutementController::class, 'edit'])->name('recrutement.edit'); //route de bouton modifier
Route::match(['get', 'post'], '/update/recrutement/{id}', [App\Http\Controllers\RecrutementController::class, 'update'])->name('recrutement.update'); //route de bouton modifier2



Route::get('/delete/recrutement/{id}', [App\Http\Controllers\RecrutementController::class, 'delete'])->name('recrutement.delete'); //route de bouton supprimer
Route::get('/recrutement/show', [App\Http\Controllers\ShowRecrutementController::class, 'show'])->name('recrutement.show');







Route::match(['get', 'post'], '/site', [App\Http\Controllers\SiteController::class, 'index'])->name('siteweb');



Route::match(['get', 'post'], 'employe/dash',  [App\Http\Controllers\InfoController::class, 'indexdash'])->name('employe-dash');
Route::match(['get', 'post'], 'info/employe', [App\Http\Controllers\InfoController::class, 'index'])->name('employe.info');

//idee
Route::get('/delete/idee/{id}', [App\Http\Controllers\IdeeController::class, 'delete'])->name('idee.delete'); //route de bouton supprimer
Route::get('/deleteR/idee/{id}', [App\Http\Controllers\IdeeController::class, 'deleteR'])->name('idee.deleteR'); //route de bouton supprimer
Route::match(['get', 'post'], '/idee/index', [App\Http\Controllers\IdeeController::class, 'index'])->name('idee.index');
Route::match(['get', 'post'], '/add/idee', [App\Http\Controllers\IdeeController::class, 'store'])->name('idee.store');
Route::match(['get', 'post'], '/idee/list', [App\Http\Controllers\IdeeController::class, 'liste'])->name('idee.list');
Route::match(['get', 'post'], '/idee/listR', [App\Http\Controllers\IdeeController::class, 'listeR'])->name('idee.listR');
Route::get('/delete/idee/{id}', [App\Http\Controllers\IdeeController::class, 'delete'])->name('idee.delete'); //route de bouton supprimer
Route::match(['get', 'post'], '/edit/idee/{id}', [App\Http\Controllers\IdeeController::class, 'edit'])->name('idee.edit'); //route de bouton modifier
Route::match(['get', 'post'], '/update/idee/{id}', [App\Http\Controllers\IdeeController::class, 'update'])->name('idee.update'); //route de bouton modifier2

// reclamation
// Route::get('/reclamation/{id}', [App\Http\Controllers\ReclamationController::class, 'show'])->name('reclamation.show');
Route::get('/delete/reclamation/{id}', [App\Http\Controllers\ReclamationController::class, 'delete'])->name('reclamation.delete'); //route de bouton supprimer
Route::get('/deleteR/reclamation/{id}', [App\Http\Controllers\ReclamationController::class, 'deleteR'])->name('reclamation.deleteR'); //route de bouton supprimer
Route::match(['get', 'post'], '/edit/reclamation/{id}', [App\Http\Controllers\ReclamationController::class, 'edit'])->name('reclamation.edit'); //route de bouton modifier
Route::match(['get', 'post'], '/update/reclamation/{id}', [App\Http\Controllers\ReclamationController::class, 'update'])->name('reclamation.update'); //route de bouton modifier2
Route::match(['get', 'post'], 'reclamation/approve/{id}',  [App\Http\Controllers\ReclamationController::class, 'approve'])->name('reclamation.approve');
Route::match(['get', 'post'], '/reclamation/listR', [App\Http\Controllers\ReclamationController::class, 'listeR'])->name('reclamation.listR');
Route::match(['get', 'post'], '/reclamation/list', [App\Http\Controllers\ReclamationController::class, 'liste'])->name('reclamation.list');
Route::match(['get', 'post'], '/reclamation/index', [App\Http\Controllers\ReclamationController::class, 'index'])->name('reclamation.index');
Route::match(['get', 'post'], '/add/reclamation', [App\Http\Controllers\ReclamationController::class, 'store'])->name('reclamation.store');

//attestation
Route::get('/travail/attestation/{id}', [App\Http\Controllers\AttestationController::class, 'travailAT'])->name('attestation.travailAT'); //route de bouton supprimer
Route::get('/stage/attestation/{id}', [App\Http\Controllers\AttestationController::class, 'stageAT'])->name('attestation.stageAT'); //route de bouton supprimer
Route::get('/formation/attestation/{id}', [App\Http\Controllers\AttestationController::class, 'formationAT'])->name('attestation.formationAT'); //route de bouton supprimer
Route::get('/salaire/attestation/{id}', [App\Http\Controllers\AttestationController::class, 'salaireAT'])->name('attestation.salaireAT'); //route de bouton supprimer
Route::match(['get', 'post'], '/demandeDocument/index', [App\Http\Controllers\DemandeDocumentController::class, 'index'])->name('demandeDocument.index');
Route::match(['get', 'post'], '/add/demandeDocument', [App\Http\Controllers\DemandeDocumentController::class, 'store'])->name('demandeDocument.store');
Route::match(['get', 'post'], '/attestation/list', [App\Http\Controllers\AttestationController::class, 'lister'])->name('attestation.list');
Route::match(['get', 'post'], '/attestation/indexE', [App\Http\Controllers\AttestationController::class, 'indexE'])->name('attestation.indexE');
Route::match(['get', 'post'], '/add/attestation', [App\Http\Controllers\AttestationController::class, 'store'])->name('attestation.store');
Route::match(['get', 'post'], 'attestation/approve/{id}',  [App\Http\Controllers\AttestationController::class, 'approve'])->name('attestation.approve');
Route::match(['get', 'post'], '/attestation/{id}/create',  [App\Http\Controllers\AttestationController::class, 'create'])->name('attestation.create');
Route::match(['get', 'post'], '/attestation/index', [App\Http\Controllers\AttestationController::class, 'index'])->name('attestation.index');
Route::match(['get', 'post'], '/demandeDocument/indexR', [App\Http\Controllers\DemandeDocumentController::class, 'indexR'])->name('demandeDocument.indexR');
Route::match(['get', 'post'], '/attestation/listR', [App\Http\Controllers\AttestationController::class, 'listerR'])->name('attestation.listR');
Route::get('/delete/attestation/{id}', [App\Http\Controllers\AttestationController::class, 'delete'])->name('attestation.delete'); //route de bouton supprimer
Route::get('/deleteR/attestation/{id}', [App\Http\Controllers\AttestationController::class, 'deleteR'])->name('attestation.deleteR'); //route de bouton supprimer
Route::get('/attestation/{id}', [App\Http\Controllers\AttestationController::class, 'show'])->name('attestation.show');

//conge
Route::get('/delete/conge/{id}', [App\Http\Controllers\CongeController::class, 'delete'])->name('conge.delete'); //route de bouton supprimer
Route::get('/deleteE/conge/{id}', [App\Http\Controllers\CongeController::class, 'deleteE'])->name('conge.deleteE'); //route de bouton supprimer
Route::match(['get', 'post'], '/conge/index', [App\Http\Controllers\CongeController::class, 'index'])->name('conge.index');
Route::match(['get', 'post'], '/conge/indexE', [App\Http\Controllers\CongeController::class, 'indexE'])->name('conge.indexE');
Route::match(['get', 'post'], '/add/conge', [App\Http\Controllers\CongeController::class, 'store'])->name('conge.store');
Route::match(['get', 'post'], 'conge/approve/{id}',  [App\Http\Controllers\CongeController::class, 'approve'])->name('conge.approve');
Route::match(['get', 'post'], '/conge/{id}/create',  [App\Http\Controllers\CongeController::class, 'create'])->name('conge.create');
Route::get('/conge/{id}', [App\Http\Controllers\CongeController::class, 'show'])->name('conge.show');

//profile
Auth::routes();
Route::match(['get', 'post'], 'profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('admin.profile');
Route::match(['get', 'post'], 'update-profile-info', [ProfileController::class, 'updateInfo'])->name('adminUpdateInfo');
Route::match(['get', 'post'], 'change-password', [ProfileController::class, 'changePassword'])->name('adminChangePassword');

//annonce
Route::get('/annonces/{id}', [App\Http\Controllers\AnnonceController::class, 'showE'])->name('annonce.showE');
Route::get('/annonce/indexE', [App\Http\Controllers\AnnonceController::class, 'indexE'])->name('annonce.indexE');
Route::match(['get', 'post'], 'annonce/index', [App\Http\Controllers\AnnonceController::class, 'index'])->name('annonce.index');
Route::get('/annonce/{id}', [App\Http\Controllers\AnnonceController::class, 'show'])->name('annonce.show');
Route::get('/create/annonce', [App\Http\Controllers\AnnonceController::class, 'create'])->name('annonce.create');
Route::match(['get', 'post'], '/add/annonce', [App\Http\Controllers\AnnonceController::class, 'store'])->name('annonce.store');
Route::match(['get', 'post'], '/edit/annonce/{id}', [App\Http\Controllers\AnnonceController::class, 'edit'])->name('annonce.edit');
Route::match(['get', 'post'], '/update/annonce/{id}', [App\Http\Controllers\AnnonceController::class, 'update'])->name('annonce.update');
Route::get('/delete/annonce/{id}', [App\Http\Controllers\AnnonceController::class, 'delete'])->name('annonce.delete'); //route de bouton supprimer
Route::get('/deleteE/annonce/{id}', [App\Http\Controllers\AnnonceController::class, 'deleteE'])->name('annonce.deleteE'); //route de bouton supprimer

//reunions
Route::get('/reunion/indexE', [App\Http\Controllers\ReunionController::class, 'indexE'])->name('reunion.indexE');
Route::get('reunion/index', [App\Http\Controllers\ReunionController::class, 'index'])->name('reunion.index');
Route::get('/create/reunion', [App\Http\Controllers\ReunionController::class, 'create'])->name('reunion.create');
Route::match(['get', 'post'], '/add/reunion', [App\Http\Controllers\ReunionController::class, 'store'])->name('reunion.store');
Route::match(['get', 'post'], '/edit/reunion/{id}', [App\Http\Controllers\ReunionController::class, 'edit'])->name('reunion.edit'); //route de bouton modifier
Route::match(['get', 'post'], '/update/reunion/{id}', [App\Http\Controllers\ReunionController::class, 'update'])->name('reunion.update'); //route de bouton modifier2
Route::get('/delete/reunion/{id}', [App\Http\Controllers\ReunionController::class, 'delete'])->name('reunion.delete'); //route de bouton supprimer
Route::get('/deleteE/reunion/{id}', [App\Http\Controllers\ReunionController::class, 'deleteE'])->name('reunion.deleteE'); //route de bouton supprimer

//calendar
Route::get('calendar/index', [CalendarController::class, 'index'])->name('calendar.index');
Route::post('calendar', [CalendarController::class, 'store'])->name('calendar.store');
Route::patch('calendar/update/{id}', [CalendarController::class, 'update'])->name('calendar.update');
Route::delete('calendar/destroy/{id}', [CalendarController::class, 'destroy'])->name('calendar.destroy');
Route::get('/attendances', [App\Http\Controllers\AttendanceController::class, 'index'])->name('attendances.index');

//dashboard
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//user
Route::get('/Habilitations/utilisateurs', [App\Http\Controllers\UserController::class, 'index'])
    ->name('Utilisateurs')
    ->middleware("auth.responsable_rh");

// Rediriger vers la page de connexion
Route::post('/logout', function (Request $request) {
    Auth::logout();
    return redirect('/login');
})->name('logout');

// Le groupe des routes relatives aux administrateurs uniquement
Route::group([
    "middleware" => ["auth", "auth.responsable_rh"],
    'as' => 'responsable_rh.'
], function () {

    Route::group([
        "prefix" => "habilitations",
        'as' => 'habilitations.'
    ], function () {

        Route::get("/utilisateurs", Utilisateurs::class)->name("users.index");
    });
});
