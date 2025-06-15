<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TchatController;
use Gloudemans\Shoppingcart\Facades\Cart;

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

/* Route::get('/', function () {
    return view('menu');
}); */
Route::get('/', [App\Http\Controllers\AccueilController::class, 'index']);  

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->back();
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//ckeditor
//Route::post('ckeditor/image_upload', 'CKEditorController@store')->name('upload');
Route::post('/ckeditor/image_upload', [App\Http\Controllers\CKEditorController::class, 'store'])->name('upload');
// mot de directeur
Route::get('/mot-directeur', [App\Http\Controllers\AccueilController::class, 'MotDirecteur'])->name('mot-directeur');
Route::get('/test', [App\Http\Controllers\AccueilController::class, 'test'])->name('test');

Route::post('/Sendcontact', [App\Http\Controllers\ContactController::class, 'Send'])->name('Sendcontact');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');

//newsletter
Route::post('/subscrireNewsller', [App\Http\Controllers\ContactController::class, 'Newsletter'])->name('subscrireNewsller');
Route::post('/subscrire', [App\Http\Controllers\ContactController::class, 'Subscrire'])->name('subscrire');
//route news
Route::get('/news', [App\Http\Controllers\NewsController::class, 'index'])->name('news');
Route::get('/news/edit/{id}', [App\Http\Controllers\NewsController::class, 'edit'])->name('news.edit');
Route::get('/news/{titre}', [App\Http\Controllers\NewsController::class, 'editNews'])->name('news.detail');

//route about
Route::get('/mission', [App\Http\Controllers\AboutController::class, 'index'])->name('about-us');
Route::get('/histoire', [App\Http\Controllers\AboutController::class, 'Histoire'])->name('histoire');
Route::get('/strategie', [App\Http\Controllers\AboutController::class, 'Strategie'])->name('strategie');
Route::get('/vision', [App\Http\Controllers\AboutController::class, 'Vision'])->name('vision');
Route::get('/valeur', [App\Http\Controllers\AboutController::class, 'Valeur'])->name('valeur');

//route activité
Route::get('/activite', [App\Http\Controllers\AboutController::class, 'Activite'])->name('activites');
Route::get('/activite/detail/{titre}', [App\Http\Controllers\AboutController::class, 'editActivite'])->name('activites.detail');


//route reference
Route::get('/references', [App\Http\Controllers\AboutController::class, 'Reference'])->name('references');
Route::get('/references/detail/{id}', [App\Http\Controllers\AboutController::class, 'editReference'])->name('references.detail');

//route documentation
Route::get('/documentation', [App\Http\Controllers\AboutController::class, 'Documentation'])->name('documentation');
Route::get('/documentation/detail/{titre}', [App\Http\Controllers\AboutController::class, 'editDocumentation'])->name('documentation.detail');


//route projet
Route::get('/projet/detail/{id}', [App\Http\Controllers\AboutController::class, 'editProjet'])->name('projet.detail');

//route gallerie
Route::get('/gallerie', [App\Http\Controllers\AboutController::class, 'Gallerie'])->name('gallerie');
Route::get('/recompense', [App\Http\Controllers\AboutController::class, 'Recompense'])->name('recompense');

   // route faq
Route::get('/faq', [App\Http\Controllers\FaqController::class, 'index'])->name('faq');

   // route partenaire liste
Route::get('/partenaire', [App\Http\Controllers\PartenaireController::class, 'index'])->name('partenaire');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});




Route::namespace('App\Http\Controllers\Admin')->group(function ()
{
    //login
    Route::get('/administration', function (){
        return redirect('/administration/login');
    });
    Route::get('/administration/login','Auth\LoginController@showLoginForm')->name('administration.login');
    Route::post('/administration/login', 'Auth\LoginController@login');
    Route::get('/administration/home','AdminController@index')->name('administration.home');
    //logout
    Route::post('/administration/logout', 'Auth\LoginController@logout')->name('administration.logout');
    //register
    Route::get('/administration/register', 'Auth\RegisterController@showRegistrationForm')->name('administration.register');
    Route::post('/administration/register', 'Auth\RegisterController@register');

    //about  route
    Route::get('/administration/about','AboutController@index')->name('administration.about');
    Route::post('/administration/about','AboutController@store');
    Route::get('/administration/about-add','AboutController@Add')->name('administration.about.add');
    Route::get('/administration/about-edit/{id}','AboutController@edit')->name('administration.about.edit');
    Route::post('/administration/about-edit/{id}','AboutController@update');
    Route::get('/administration/about/destroy/{id}','AboutController@destroy')->name('administration.about.delete');

    //histoire  route
    Route::get('/administration/histoire','HistoireController@index')->name('administration.histoire');
    Route::post('/administration/histoire','HistoireController@store');
    Route::get('/administration/histoire-add','HistoireController@Add')->name('administration.histoire.add');
    Route::get('/administration/histoire-edit/{id}','HistoireController@edit')->name('administration.histoire.edit');
    Route::post('/administration/histoire-edit/{id}','HistoireController@update');
    Route::get('/administration/histoire/destroy/{id}','HistoireController@destroy')->name('administration.histoire.delete');

    //strategie  route
    Route::get('/administration/strategie','StrategieController@index')->name('administration.strategie');
    Route::post('/administration/strategie','StrategieController@store');
    Route::get('/administration/strategie-add','StrategieController@Add')->name('administration.strategie.add');
    Route::get('/administration/strategie-edit/{id}','StrategieController@edit')->name('administration.strategie.edit');
    Route::post('/administration/strategie-edit/{id}','StrategieController@update');
    Route::get('/administration/strategie/destroy/{id}','StrategieController@destroy')->name('administration.strategie.delete');

    //vision  route
    Route::get('/administration/vision','VisionController@index')->name('administration.vision');
    Route::post('/administration/vision','VisionController@store');
    Route::get('/administration/vision-add','VisionController@Add')->name('administration.vision.add');
    Route::get('/administration/vision-edit/{id}','VisionController@edit')->name('administration.vision.edit');
    Route::post('/administration/vision-edit/{id}','VisionController@update');
    Route::get('/administration/vision/destroy/{id}','VisionController@destroy')->name('administration.vision.delete');

    //valeur  route
    Route::get('/administration/valeur','ValeurController@index')->name('administration.valeur');
    Route::post('/administration/valeur','ValeurController@store');
    Route::get('/administration/valeur-add','ValeurController@Add')->name('administration.valeur.add');
    Route::get('/administration/valeur-edit/{id}','ValeurController@edit')->name('administration.valeur.edit');
    Route::post('/administration/valeur-edit/{id}','ValeurController@update');
    Route::get('/administration/valeur/destroy/{id}','ValeurController@destroy')->name('administration.valeur.delete');

    //activité  route
    Route::get('/administration/activite','ActiviteController@index')->name('administration.activite');
    Route::post('/administration/activite','ActiviteController@store');
    Route::get('/administration/activite-add','ActiviteController@Add')->name('administration.activite.add');
    Route::get('/administration/activite-edit/{id}','ActiviteController@edit')->name('administration.activite.edit');
    Route::post('/administration/activite-edit/{id}','ActiviteController@update');
    Route::get('/administration/activite/destroy/{id}','ActiviteController@destroy')->name('administration.activite.delete');

    //contenu  route
    Route::get('/administration/contenu','ContenuController@index')->name('administration.contenu');
    Route::post('/administration/contenu','ContenuController@store');
    Route::get('/administration/contenu-add','ContenuController@Add')->name('administration.contenu.add');
    Route::get('/administration/contenu-edit/{id}','ContenuController@edit')->name('administration.contenu.edit');
    Route::post('/administration/contenu-edit/{id}','ContenuController@update');
    Route::get('/administration/contenu/destroy/{id}','ContenuController@destroy')->name('administration.contenu.delete');

    //reference  route
    Route::get('/administration/reference','ReferenceController@index')->name('administration.reference');
    Route::post('/administration/reference','ReferenceController@store');
    Route::get('/administration/reference-add','ReferenceController@Add')->name('administration.reference.add');
    Route::get('/administration/reference-edit/{id}','ReferenceController@edit')->name('administration.reference.edit');
    Route::post('/administration/reference-edit/{id}','ReferenceController@update');
    Route::get('/administration/reference/destroy/{id}','ReferenceController@destroy')->name('administration.reference.delete');

     //documentation  route
     Route::get('/administration/documentation','DocumentationController@index')->name('administration.documentation');
     Route::post('/administration/documentation','DocumentationController@store');
     Route::get('/administration/documentation-add','DocumentationController@Add')->name('administration.documentation.add');
     Route::get('/administration/documentation-edit/{id}','DocumentationController@edit')->name('administration.documentation.edit');
     Route::post('/administration/documentation-edit/{id}','DocumentationController@update');
     Route::get('/administration/documentation/destroy/{id}','DocumentationController@destroy')->name('administration.documentation.delete');

     //projet  route
    Route::get('/administration/projet','ProjetController@index')->name('administration.projet');
    Route::post('/administration/projet','ProjetController@store');
    Route::get('/administration/projet-add','ProjetController@Add')->name('administration.projet.add');
    Route::get('/administration/projet-edit/{id}','ProjetController@edit')->name('administration.projet.edit');
    Route::post('/administration/projet-edit/{id}','ProjetController@update');
    Route::get('/administration/projet/destroy/{id}','ProjetController@destroy')->name('administration.projet.delete');
    
    //route news
     Route::get('/administration/news','NewsController@index')->name('administration.news');
     Route::post('/administration/news','NewsController@store');
     Route::get('/administration/news_add','NewsController@Add')->name('administration.news.add');
     Route::get('/administration/news_edit/{id}','NewsController@edit')->name('administration.news.edit');
     Route::post('/administration/news_edit/{id}','NewsController@update');
     Route::get('/administration/news/destroy/{id}','NewsController@destroy')->name('administration.news.delete');

    //gallerie  route
    Route::get('/administration/gallerie','GallerieController@index')->name('administration.gallerie');
    Route::post('/administration/gallerie','GallerieController@store');
    Route::get('/administration/gallerie-add','GallerieController@Add')->name('administration.gallerie.add');
    Route::get('/administration/gallerie-edit/{id}','GallerieController@edit')->name('administration.gallerie.edit');
    Route::post('/administration/gallerie-edit/{id}','GallerieController@update');
    Route::get('/administration/gallerie/destroy/{id}','GallerieController@destroy')->name('administration.gallerie.delete');

    //gallerie  route
    Route::get('/administration/recompense','RecompenseController@index')->name('administration.recompense');
    Route::post('/administration/recompense','RecompenseController@store');
    Route::get('/administration/recompense-add','RecompenseController@Add')->name('administration.recompense.add');
    Route::get('/administration/recompense-edit/{id}','RecompenseController@edit')->name('administration.recompense.edit');
    Route::post('/administration/recompense-edit/{id}','RecompenseController@update');
    Route::get('/administration/recompense/destroy/{id}','RecompenseController@destroy')->name('administration.recompense.delete');

      //faq saconets route
      Route::get('/administration/faq','FaqController@index')->name('administration.faq');
      Route::post('/administration/faq','FaqController@store');
      Route::get('/administration/faq_add','FaqController@Add')->name('administration.faq.add');
      Route::get('/administration/faq_edit/{id}','FaqController@edit')->name('administration.faq.edit');
      Route::post('/administration/faq_edit/{id}','FaqController@update');
      Route::get('/administration/faq/destroy/{id}','FaqController@destroy')->name('administration.faq.delete');

     //partenaire saconets route
     Route::get('/administration/partenaire','PartenaireController@index')->name('administration.partenaire');
     Route::post('/administration/partenaire','PartenaireController@store');
     Route::get('/administration/partenaire_add','PartenaireController@Add')->name('administration.partenaire.add');
     Route::get('/administration/partenaire_edit/{id}','PartenaireController@edit')->name('administration.partenaire.edit');
     Route::post('/administration/partenaire_edit/{id}','PartenaireController@update');
     Route::get('/administration/partenaire/destroy/{id}','PartenaireController@destroy')->name('administration.partenaire.delete');

     //slider  route
     Route::get('/administration/slider','SliderController@index')->name('administration.slider');
     Route::post('/administration/slider','SliderController@store');
     Route::get('/administration/slider_add','SliderController@Add')->name('administration.slider.add');
     Route::get('/administration/slider_edit/{id}','SliderController@edit')->name('administration.slider.edit');
     Route::post('/administration/slider_edit/{id}','SliderController@update');
     Route::get('/administration/slider/destroy/{id}','SliderController@destroy')->name('administration.slider.delete');

      //mot du directeur route
      Route::get('/administration/mot-directeur','MotDirecteurController@index')->name('administration.mot-directeur');
      Route::post('/administration/mot-directeur','MotDirecteurController@store');
      Route::get('/administration/mot-directeur-add','MotDirecteurController@Add')->name('administration.mot-directeur.add');
      Route::get('/administration/mot-directeur-edit/{id}','MotDirecteurController@edit')->name('administration.mot-directeur.edit');
      Route::post('/administration/mot-directeur-edit/{id}','MotDirecteurController@update');
      Route::get('/administration/mot-directeur/destroy/{id}','MotDirecteurController@destroy')->name('administration.mot-directeur.delete');

});



// route redirection
Route::get('/activite/detail/language/fr', function (){
    return redirect('/activite');
});

Route::get('/activite/detail/language/en', function (){
    return redirect('/activite');
});


Route::get('/references/detail/language/fr', function (){
    return redirect('/references');
});

Route::get('/references/detail/language/en', function (){
    return redirect('/references');
});


Route::get('/news/language/fr', function (){
    return redirect('/');
});

Route::get('/news/language/en', function (){
    return redirect('/');
});

Route::get('/projet/detail/language/en', function (){
    return redirect('/');
});

Route::get('/projet/detail/language/fr', function (){
    return redirect('/');
});
// Route::get('/job/edit/language/fr', function (){
//     return redirect('/job');
// });

