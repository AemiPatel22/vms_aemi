<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\RagistrationController;
use App\Http\Controllers\backend\DocumenttypeController;
use App\Http\Controllers\backend\DocumententryController;

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
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    echo "Cache is cleared<br>";
    Artisan::call('route:clear');
    echo "route cache is cleared<br>";
    Artisan::call('config:clear');
    echo "config is cleared<br>";
    Artisan::call('view:clear');
    echo "view is cleared<br>";
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
Route::get('login',[LoginController::class,'login'])->name('login');
Route::get('register',[RagistrationController::class,'register'])->name('register');

Route::get('category',[CategoryController::class,'category'])->name('category');

Route::get('doc-type',[DocumenttypeController::class,'doc_type'])->name('doc-type');
Route::get('add-doctype',[DocumenttypeController::class,'add_doctype'])->name('add-doctype');
Route::get('edit-doctype/{id}',[DocumenttypeController::class,'edit_doctype'])->name('edit-doctype');
Route::post('save-edit-doctype',[DocumenttypeController::class, 'save_edit_doctype'])->name('save-edit-doctype');
Route::post('save-doctype',[DocumenttypeController::class,'save_doctype'])->name('save-doctype');
Route::get('view-doctype/{id}',[DocumenttypeController::class, 'view_doctype'])->name('view-doctype');

Route::post('doctype-ajax',[DocumenttypeController::class,'action_doctype'])->name('doctype-ajax');


Route::get('doc-entry',[DocumententryController::class,'doc_entry'])->name('doc-entry');
Route::get('add-docentry',[DocumententryController::class,'add_docentry'])->name('add-docentry');
Route::get('edit-docentry/{id}',[DocumententryController::class,'edit_docentry'])->name('edit-docentry');
Route::post('save-edit-docentry',[DocumententryController::class, 'save_edit_docentry'])->name('save-edit-docentry');
Route::post('save-docentry',[DocumententryController::class,'save_docentry'])->name('save-docentry');
Route::get('view-docentry/{id}',[DocumententryController::class, 'view_docentry'])->name('view-docentry');

Route::post('docentry-ajax',[DocumententryController::class,'action_docentry'])->name('docentry-ajax');

