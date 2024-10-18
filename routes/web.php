<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::multilingual('about', [PageController::class, 'about'])->name('page.about');
Route::multilingual('places', [PageController::class, 'places'])->name('page.places');
Route::multilingual('image-gallery', [PageController::class, 'imageGallery'])->name('page.image-gallery');
Route::multilingual('imprint', [PageController::class, 'imprint'])->name('page.imprint');
Route::multilingual('privacy-policy', [PageController::class, 'privacy'])->name('page.privacy');

Route::get('lieux/{place}', [PageController::class, 'place'])->name('fr.page.place');
Route::get('de/orte/{place}', [PageController::class, 'place'])->name('de.page.place');
Route::get('en/places/{place}', [PageController::class, 'place'])->name('en.page.place');

Route::get('{locale?}', [PageController::class, 'home'])->name('page.home')->where('locale', implode('|', config('locales.supported')));