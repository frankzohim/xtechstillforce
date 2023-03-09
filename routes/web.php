<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('home');
});


Route::get('/', [HomeController::class, 'index']);
Route::get('accueil', 'HomeController@index');
Route::get('about', 'HomeController@about');
Route::get('shop', 'HomeController@shop');
Route::get('blog', ['as' => 'blog', 'uses' => 'HomeController@blog']);
Route::get('career', 'HomeController@career');
Route::get('recommandation', ['as' => 'recommandation', 'uses' => 'HomeController@recommandation']);
Route::get('contact', ['as' => 'contact', 'uses' => 'ContactController@contact']);
Route::post('contact', ['as' => 'contact.save', 'uses' => 'ContactController@save']);
Route::post('consult', ['as' => 'consult.save', 'uses' => 'ConsultController@save']);
Route::get('faqs', ['as' => 'faqs', 'uses' => 'HomeController@faq']);
Route::get('group', 'HomeController@group');
Route::get('services', 'HomeController@services');
Route::get('mission', 'HomeController@mission');
Route::get('partenaires', 'HomeController@partenaires');
Route::get('representations', ['as' => 'representations', 'uses' => 'HomeController@representations']);
Route::get('news-medias', 'HomeController@news_medias');
Route::get('big-data', ['as' => 'big-data', 'uses' => 'HomeController@bigdata']);
Route::get('cryptographie', ['as' => 'cryptographie', 'uses' => 'HomeController@cryptographie']);
Route::get('marketing-digital', ['as' => 'marketing-digital', 'uses' => 'HomeController@marketingdigital']);
Route::get('audit-informatique', ['as' => 'audit-informatique', 'uses' => 'HomeController@auditinformatique']);
Route::get('developpement-web', ['as' => 'developpement-web', 'uses' => 'HomeController@developpementweb']);
Route::get('developpement-mobile', ['as' => 'developpement-mobile', 'uses' => 'HomeController@developpementmobile']);
Route::get('developpement-desktop', ['as' => 'developpement-desktop', 'uses' => 'HomeController@developpementdesktop']);
Route::get('reseau-informatique', ['as' => 'reseau-informatique', 'uses' => 'HomeController@reseauinformatique']);
Route::get('securite-informatique', ['as' => 'securite-informatique', 'uses' => 'HomeController@securiteinformatique']);
Route::get('business-intelligence', ['as' => 'business-intelligence', 'uses' => 'HomeController@businessintelligence']);
Route::get('intelligence-artificielle', ['as' => 'intelligence-artificielle', 'uses' => 'HomeController@intelligenceartificielle']);
Route::get('community-management', ['as' => 'community-management', 'uses' => 'HomeController@communitymanagement']);

Route::get('pricing', ['as' => 'pricing', 'uses' => 'HomeController@pricing']);
Route::get('quel-langage-de-programmation-apprendre-en-2020', ['as' => 'langage-programmation', 'uses' => 'HomeController@blog_post6']);
Route::get('10-meilleurs-frameworks-PHP-pour-2020', ['as' => 'frameworks-PHP', 'uses' => 'HomeController@blog_post5']);
Route::get('voici-comment-monétiser-votre-site-internet', ['as' => 'monétiser-votre-site-internet', 'uses' => 'HomeController@blog_post4']);
Route::get('instagram-aurait-soudoye-des-influenceurs-de-tiktok', ['as' => 'instagram-tiktok', 'uses' => 'HomeController@blog_post3']);
Route::get('amazon-lance-un-chariot-intelligent-qui-scanne-vos-courses', ['as' => 'amazon-chariot', 'uses' => 'HomeController@blog_post1']);
Route::get('plateforme-de-réalité-augmentée-par-Google', ['as' => 'realite-augmentee', 'uses' => 'HomeController@blog_post2']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
