<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlabController;
use App\Http\Controllers\Textcontroller;
use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;


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

Route::get('/login', function () {
    return view('auth.login');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('home',[KlabController::class,'index']);
Route::get('blogdata',[Textcontroller::class, 'addBlog'])->name('addblogdata');
Route::get('viewBlog',[TextController::class, 'ViewBlogfn']);
Route::get('AddBlog',[TextController::class, 'AddBlog']);
//Route::get('/function', [EmailController::class, 'sendEmail']);
//Route::get('/show','FormController@index');
Route::get('send-email', function()
{
    Mail::to("mugemajames2000@gmail.com")
    ->send(new TestEmail());
    // dd("Mail send Successfully!"); 
});


