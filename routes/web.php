<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ProfilsController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::view('/index', 'index')->name('index');
Route::view('/admin/layout', 'layouts.admin-layout')->name('admin.layout');
//Route::post('/profile/uploads',[ArticlesController::class,'store'])->name('profile.uploads');
//Route::get('/form/uploads',[ArticlesController::class,'form'])->name('form.uploads');
Route::post('data/uploads',[ArticlesController::class,'dataUploads'])->name('data.uploads');
Route::get('/data/form',[ArticlesController::class,'dataForm'])->name('data.form');
Route::get('data/articles',[ArticlesController::class,'show'])->name('data.articles');
//Route::view('/data/form','Article.uploads_form');
/*Route::group(['/prefix'=>'article'],function(){
    Route::post('data/uploads',[ArticlesController::class,'dataUploads'])->name('data.uploads');
    Route::get('data/form',[ArticlesController::class,'dataForm'])->name('data.form');
});*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
