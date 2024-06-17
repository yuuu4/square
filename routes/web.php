<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController; 
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ReplyController;



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



 Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

 Route::get('posts/registration', [TeamController::class, 'registration'])->name('registration');

 Route::controller(PostController::class)->middleware(['auth'])->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/posts/create','create')->name('create');
    Route::post('/posts','store')->name('store');
    Route::get('/posts/{post}','show')->name('show');
    Route::get('/posts/{post}/edit','edit')->name('edit');
    Route::put('/posts/{post}','update')->name('update');
    Route::delete('/posts/{post}','delete')->name('delete');
    Route::post('/posts/like','like')->name('post.like');
});
    
    
 Route::controller(TeamController::class)->middleware(['auth'])->group(function(){

    Route::post('/posts/registration','submit');
    Route::get('posts/registration/team_list','team_list')->name('team_list');
    Route::get('/posts/registration/team_list/{team}','show_team');
    Route::put('/posts/registration/team_list/{team}','update');
    Route::get('/posts/{team}/list_edit','list_edit');
    Route::delete('/posts/registration/team_list/{team}','delete');
});

 Route::controller(ProfileController::class)->middleware(['auth'])->group(function(){
    Route::get('/profile', 'edit')->name('profile.edit');
    Route::patch('/profile','update')->name('profile.update');
    Route::delete('/profile','destroy')->name('profile.destroy');
}); 
     
Route::controller(ReplyController::class)->middleware(['auth'])->group(function(){
     Route::get('/posts/{post}/create_reply','create_reply');
     Route::post('/posts/{post}/store_reply','store_reply')->name('posts.store_reply');
     Route::get('/posts/{post}/show_reply','show_reply')->name('posts.show_reply');
    
}); 
 
 Route::controller(CategoryController::class)->middleware(['auth'])->group(function(){
    Route::get('/categories/{category}','index');
   
});


require __DIR__.'/auth.php';
