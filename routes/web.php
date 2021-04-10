<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SendEmailController;
use Illuminate\Support\Facades\Mail;
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

Route::get('post/create', function () {
    DB::table('posts')->insert([
        'title' => 'Nauryz',
        'body' => 'Congratulations'
    ]);
});

Route::get('post', function () {
    $post = Post::find(2);
    return $post;
});

Route::get('blog/index', [BlogController::class, 'index']);
Route::get('blog/create', function(){
    return view('blog.create');
});

Route::post('blog/create', [BlogController::class, 'store'])->name('add-post');

Route::get('post/{id}', [BlogController::class, 'get_post']);

Route::resource('forms', 'App\Http\Controllers\FormController');

Route::get('mail/send', 'App\Http\Controllers\MailController@send');