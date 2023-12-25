<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Mail\OrderShipped;

use Illuminate\Support\Facades\Mail;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/trash', [PostController::class, 'trashed'])->name('posts.trashed');
Route::get('/posts/{id}/restore', [PostController::class, 'restore'])->name('posts.restore');
Route::delete('/posts/{id}/force-delete', [PostController::class, 'forceDelete'])->name('posts.force_delete');
Route::resource('posts', PostController::class);


Route::get('/unavailable', function() {
    return view('unavailable');
})->name('unavailable');



//  Route::group([], callback)

Route::group(["middleware" => "authCheck2"], function(){
    Route::get('/dashboard', function(){
        return view('dashboard');
    });
    
    Route::get('/profile', function(){
        return view('profile');
    });    
});


Route::get('contact', function ()
{
    $posts = Post::all();
    return view('contact', compact('posts'));
});

Route::get('send-email', function (){
    // Mail::raw('This is a test mail', function ($message){
    //     $message->to('test@gmail.com')->subject('hi this is a test email');
    // });

    Mail::send(new OrderShipped);

    dd('success');
});