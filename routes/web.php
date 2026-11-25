<?php

use App\Http\Controllers\BaseController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstagramFeedController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [BaseController::class, 'index'])->name('index');
Route::get('/teams-roster', [BaseController::class, 'teamsRoster'])->name('teams.roster');
Route::get('/team', [BaseController::class, 'team'])->name('team');
Route::get('/coaching-staff', [BaseController::class, 'coachingStaff'])->name('coaching.staff');
Route::get('/coaching-profile/{id}', [BaseController::class, 'coachingProfile'])->name('coachingProfile');
Route::get('/schedule', [BaseController::class, 'schedule'])->name('schedule');
Route::get('/news', [BaseController::class, 'news'])->name('news');
Route::get('/single-news', [BaseController::class, 'singleNew'])->name('singleNew');
Route::get('/alumni', [BaseController::class, 'alumni'])->name('alumni');
Route::get('/records', [BaseController::class, 'records'])->name('records');
Route::get('/historical-seasons', [BaseController::class, 'historicalSeasons'])->name('historicalSeasons');
Route::get('/media-albums-2025', [BaseController::class, 'mediaAlbums2025'])->name('mediaAlbums2025');
Route::get('/media-albums-2020', [BaseController::class, 'mediaAlbums2020'])->name('mediaAlbums2025');
Route::get('/media-album-single/{folder}/{name}', [BaseController::class, 'mediaAlbumSingle'])->name('mediaAlbumSingle');
Route::get('/coming-soon', [BaseController::class, 'comingSoon'])->name('comingSoon');


// images  fetching
Route::get('/session-images/{folder}', [ImageController::class, 'getImages'])->name('session.image');
Route::get('/images-not-available', [ImageController::class, 'notAvailable'])->name('not.available');


Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return 'All cache cleared';
});

Route::get(
    '/api/instagram-feed',
    [InstagramFeedController::class, 'index']
)->name('api.instagram-feed');









