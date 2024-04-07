<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/cc', function() {
    \Artisan::call('cache:clear');
    \Artisan::call('view:clear');
    \Artisan::call('route:clear');
    \Artisan::call('config:clear');
    \Artisan::call('config:cache');

    return 'DONE';
});

Route::get('/', [App\Http\Controllers\SettingController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin/')->middleware('auth')->group(function() {
    Route::resource('campaigns', App\Http\Controllers\CampaignController::class);
    Route::get('campaigns/status-change/{campaign}', [App\Http\Controllers\CampaignController::class,'statusChange'])->name('campaigns.status-change');


    Route::get('settings', [App\Http\Controllers\SettingController::class,'create'])->name('settings');
    Route::get('settings/{lang?}', [App\Http\Controllers\SettingController::class,'setLanguage'])->name('settings.lang');
    Route::post('settings', [App\Http\Controllers\SettingController::class,'store'])->name('settings');
    Route::put('settings/update{setting}', [App\Http\Controllers\SettingController::class,'update'])->name('settings.update');
    Route::get('perticipants', [App\Http\Controllers\PerticipantController::class,'index'])->name('perticipants.index');
    Route::get('perticipants/export', [App\Http\Controllers\PerticipantController::class,'export'])->name('perticipants.export');
});


Route::post('perticipants', [App\Http\Controllers\PerticipantController::class,'store'])->name('perticipants.store');
