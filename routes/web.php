<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminPostsController;
use App\Http\Controllers\ContactFormController;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/blog', [PagesController::class, 'posts'])->name('blog');
Route::get('posty/{post:slug}',[PagesController::class,'post'])->name('post.show');



Route::get('/', [PagesController::class,'home'])->name('home');
Route::post('/', [ContactFormController::class,'send'])->name('form.send');

Route::get('/o-mnie', [PagesController::class,'about'])->name('about');
Route::get('/konsultacje', [PagesController::class,'consultations'])->name('consultations');
Route::get('/szczeniak', [PagesController::class,'puppy'])->name('puppy');
Route::get('/pomoc-w-wyborze', [PagesController::class,'choice'])->name('choice');
Route::get('/petsitting', [PagesController::class,'petsitting'])->name('petsitting');

Route::get('/kontakt', [PagesController::class,'contact'])->name('contact');
Route::post('/kontakt', [ContactFormController::class,'send'])->name('form.send');

Route::get('/galeria', [PagesController::class,'gallery'])->name('gallery');
// Route::get('/blog', [PagesController::class,'inBuild'])->name('blog');


Route::get('/pajdekRedaktor', [AdminPostsController::class, 'index'])->name('admin.index')->middleware('admin');
Route::get('/admin/nowyPost', [AdminPostsController::class, 'create'])->name('admin.create')->middleware('admin');
Route::post('/admin/nowyPost', [AdminPostsController::class, 'store'])->name('store')->middleware('admin');
Route::get('/{post:slug}', [AdminPostsController::class, 'show'])->name('admin.show')->middleware('admin');
Route::get('/{post:slug}/edytuj', [AdminPostsController::class, 'edit'])->name('admin.edit')->middleware('admin');
Route::patch('/{post:slug}', [AdminPostsController::class, 'update'])->name('admin.update')->middleware('admin');
Route::delete('/{post:slug}', [AdminPostsController::class, 'destroy'])->name('admin.destroy')->middleware('admin');
//zmienic nazwe 
Route::post('/admin/nowyPost/upload', [AdminPostsController::class, 'upload'])->name('ckeditor.upload');