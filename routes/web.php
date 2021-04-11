<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;  
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UploadFileController;


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
Route::get('/home', function () {
    return view('home');    
})->name('home');

Route::get('/skills', function () {
    return view('skills');    
})->name('skills');

Route::get('/contact', function () {
    return view('contact');    
})->name('contact'); 

Route::get('/other', function () {
    return "other";
});

Route::get('post/add', function(){
    DB::table('post')->insert([
        'title' => 'My title',
        'body' => 'My body'
    ]);
});

Route::get('blog/index', [BlogController::class, 'index']);

Route::get('blog/create', function (){
	return view('blog.create');
});

Route::post('blog/create', [BlogController::class, 'store'])->name('add-post');

Route::get('post/{id}', [BlogController::class, 'get_post']);

/*lab 8(sending to email)*/
/*Route::get('uploadfile', function(){
    return view('upload');
});*/
/*Route::get('uploadfile', 'UploadFileController@index');
Route::post('uploadfile', 'UploadFileController@showUploadFIle');

Route::get('/send', 'mailController@send');*/

Route::get('multiuploads', 'App\Http\Controllers\UploadFileController@uploadForm');
Route::post('multiuploads', 'App\Http\Controllers\UploadFileController@uploadSubmit');

Route::get('mail/send', 'App\Http\Controllers\MailController@send');