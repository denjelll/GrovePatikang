<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductAndTourController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/editprofile', 'HomeController@profile')->name('admin.profil');
Route::post('/editedprofile', 'HomeController@editedprofile')->name('editedprofil');
Route::get('/artikel', 'HomeController@blog')->name('artikel.index');
Route::get('/artikel/create', 'HomeController@create')->name('createblog');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/createblog', [BlogController::class, 'create'])->name('createblog');
Route::post('/storeblog', [BlogController::class, 'store'])->name('storeblog');
Route::get('/editblog/{id}', [BlogController::class, 'edit'])->name('editblog');
Route::put('/updateblog/{id}', [BlogController::class, 'update'])->name('updateblog');
Route::delete('/deleteblog/{id}', [BlogController::class, 'destroy'])->name('deleteblog');
Route::get('/admin/productandtour', [ProductAndTourController::class, 'index'])->name('productandtour');
Route::get('/admin/productandtour/create', [ProductAndTourController::class, 'create'])->name('createproductandtour');
Route::post('/admin/productandtour/store', [ProductAndTourController::class, 'store'])->name('storeproductandtour');
Route::get('/admin/productandtour/edit/{id}', [ProductAndTourController::class, 'edit'])->name('editproductandtour');
Route::put('/admin/productandtour/update/{id}', [ProductAndTourController::class, 'update'])->name('updateproductandtour');
Route::delete('/admin/productandtour/delete/{id}', [ProductAndTourController::class, 'destroy'])->name('deleteproductandtour');
Route::get('/edituser','HomeController@edituser')->name('edituser');
Route::get('/deleteduser/{id}','HomeController@deleteduser')->name('deleteduser');
Route::get('/informationpost', 'HomeController@informationpost')->name('informationpost');
Route::get('/informationuser/{id}','HomeController@informationuser')->name('informationuser');
Route::get('/redirect', 'HomeController@redirect')->middleware('auth');
Route::get('/admin/dashboard', 'HomeController@adminDashboard')
    ->name('admin.dashboard')
    ->middleware('auth');

Route::get('/', 'WelcomeController@indexshow')->name('homeshow');
Route::get('/aboutus', 'WelcomeController@aboutus')->name('aboutus');
Route::get('/contactus', 'WelcomeController@contactus')->name('contactus');
Route::get('/csr', 'WelcomeController@csr')->name('csr');
Route::get('/researchdedication', 'WelcomeController@researchdedication')->name('researchdedication');
Route::get('/post/{id}', 'WelcomeController@post')->name('post');
Route::get('/product-tour', [WelcomeController::class, 'productTour'])->name('product.tour');

// Route::get('/productandtour', [WelcomeController::class, 'productAndTourForGuest'])->name('productandtour');
// Route::get('/productandtour', [ProductAndTourController::class, 'index'])->name('productandtour.index');
Route::get('/newsandblog', function () {
    return redirect()->route('category', ['id' => 2]);
})->name('newsandblog');
Route::get('/category/{id}', 'WelcomeController@category')->name('category');
Route::get('/testing', 'WelcomeController@testing')->name('testing');

