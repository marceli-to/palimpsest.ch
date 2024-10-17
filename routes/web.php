<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::multilingual('about', [PageController::class, 'about'])->name('page.about');
Route::multilingual('places', [PageController::class, 'places'])->name('page.places');
Route::multilingual('image-gallery', [PageController::class, 'imageGallery'])->name('page.image-gallery');

Route::get('/', [PageController::class, 'home'])->name('page.home');
Route::get('/{locale}', [PageController::class, 'home'])->name('page.home');
