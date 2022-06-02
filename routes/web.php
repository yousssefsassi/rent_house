<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\IndexController;
use App\Http\Controller\rentController;
use App\Models\Post;
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

Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/app', function () {
    return view('rent.app');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/create', function () {
    return view('posts.create');
});

 
Route::patch('/update/{id}', ['as' => 'post.update', 'uses' => 'PostrController@update']);
 
Route::delete('/delete/{id}', ['as' => 'post.delete', 'uses' => 'PostController@delete']);

    Route::resource('Posts', App\Http\Controllers\PostController::class);
Route::resource('Posts.Comments', App\Http\Controllers\PostCommentController::class);
Route::match(['get', 'post'], '/botman', [\App\Http\Controllers\BotmanController::class,'handle']);
