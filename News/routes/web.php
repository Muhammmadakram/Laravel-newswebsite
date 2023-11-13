<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\IndexController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('news', function () {
    return view('auth/login');
});

// Auth
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {

Route::get('/dashboard', [NewsController::class, 'dashboard']);

Route::get('/newsflash', [NewsController::class, 'newsflash']);

Route::post('/addflash', [NewsController::class, 'addflash']);

Route::get('/pagination/flash', [NewsController::class,'pagination_flash']);

Route::delete('/removeflash/{id}',[NewsController::class,'deleteflash']);

Route::post('/updateflash',[NewsController::class,'update_flash']);





            // Newscategory
Route::get('/newscategory', [NewsController::class, 'newscategory']);

Route::post('/addcategory', [NewsController::class, 'addcategory']);

Route::delete('/deletecategory/{id}',[NewsController::class,'deletecategory']);

Route::post('/updatecategory',[NewsController::class,'update_category']);

Route::get('/pagination/newscategory', [NewsController::class,'paginationcategory']);

                      // Author
Route::get('/author', [NewsController::class, 'author']);

Route::post('/addauthor', [NewsController::class, 'addauthor']);

Route::get('/pagination/author', [NewsController::class,'paginationauthor']);

 Route::delete('/deleteauthor/{id}',[NewsController::class,'deleteauthor']);

Route::post('/updateauthor',[NewsController::class,'updateauthor']);


                    //   // post news
     Route::get('/post', [NewsController::class, 'post']);

                      // for add post next blade
    Route::get('/formpost', [NewsController::class, 'formpost']);

    Route::post('/addpost', [NewsController::class, 'addpost']);

    Route::get('/delete_post/{id}',[NewsController::class,'delete_post']);

    Route::get('/updatepost/{id}',[NewsController::class,'updatepost']);

    Route::post('/update_post/{id}',[NewsController::class,'update_post']);


// Index home page
});
Route::get('/',[IndexController::class,'index']);


Route::get('/Category_details/{id}',[IndexController::class,'Category_details']);

Route::get('/postdetails/{id}',[IndexController::class,'Postdetails']);

Route::get('/Authur',[IndexController::class,'authors']);


// Route::get('/',[IndexController::class,'home']);

// Banner section home

// Route::get('/newsban', [NewsController::class, 'newsban']);

// Route::post('/addbanner',[NewsController::class,'addbanner']);

// Route::delete('/deletebanner/{id}', [NewsController::class,'deletebanner']);

// Route::get('/pagination/pagination-data', [NewsController::class,'pagination']);

// Route::post('/updatebanner',[NewsController::class,'updatebanner'])->name('updatebanner');


// // Home news
// Route::get('/newshome', [NewsController::class, 'newshome']);

// Route::post('/addhomenews', [NewsController::class, 'addhomenews']);

// Route::delete('/deletehome/{id}',[NewsController::class,'deletehome']);

// Route::get('/pagination/newshome', [NewsController::class,'paginationhome']);

// Route::post('/updatehome',[NewsController::class,'updatehome'])->name('updatenewshome');
