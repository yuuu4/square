<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController; 
use App\Http\Controllers\TeamController;


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


Route::get('/',[PostController::class,'index'])->name('index');;


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/posts/create',[PostController::class,'create']);
    Route::get('posts/registration',[TeamController::class,'registration']);
    Route::post('/posts/registration',[TeamController::class,'submit']);
    Route::get('posts/registration/team_list', [TeamController::class, 'team_list']);
    Route::get('/posts/{post}',[PostController::class,'show']);
    Route::get('/posts/registration/team_list/{team}',[TeamController::class,'show_team']);
    Route::put('/posts/registration/team_list/{team}', [TeamController::class,'update']);
    Route::post('/posts',[PostController::class,'store']);
    Route::get('/posts/{post}/edit',[PostController::class,'edit']);
    Route::put('/posts/{post}',[PostController::class,'update']);
    Route::delete('/posts/{post}',[PostController::class,'delete']);
    Route::delete('/posts/registration/team_list/{team}',[TeamController::class,'delete']);
    Route::get('/categories/{category}', [CategoryController::class,'index']);
    Route::get('/posts/{team}/list_edit',[TeamController::class,'list_edit']);
    
});


require __DIR__.'/auth.php';
