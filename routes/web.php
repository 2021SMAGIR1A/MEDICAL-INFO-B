<?php

use Illuminate\Support\Facades\Route;
use App\Models\Individu;
use App\Models\Patient;
use App\Models\Secretaire;
use App\Models\Infirmier;
use App\Models\Medcin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('connexion');
});

//Route::get('/connexion','ConnexionController@formulaire')->name('fomulaire');
Route::post('/secretaire','connexioncontroller@traitement')->name('formulaire');

Route::post('/inscription',function(Request $request){
  $individu= new Individu();
  $individu->name=request('name');
  $individu->prenom=request('prenom');
  $individu->birthday=request('birthday');
  $individu->telephone=request('telephone');
  $individu->mail=request('mail');
  $individu->password=request('password');
  $individu->statut=request('statut');
  $individu->save();
  return view('/secretaire');
});

/*Route::post('/connexion',function() {
  return'votre nom est'. request('name') .'votre email est '.request('mail');
}); */

Route::get('/enregistrement','connexioncontroller@enregistrement');
Route::get('/enregistrement','connexioncontroller@traitementenregistrement');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
