<?php

use App\Events\MessageNotification;
use App\Http\Controllers\NotificationController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', [NotificationController::class, 'index'])->name('notifications.index');

Route::get('/create', [NotificationController::class, 'create'])->name('notifications.create');

Route::post('/store', [NotificationController::class, 'store'])->name('notifications.store');

Route::get('/event', function() {
    event(new MessageNotification('notifications'));
});

Route::get('/listen', function() {
    return view('listen');
});

Route::get('/notifications/count', [NotificationController::class, 'count'])->name('notifications.count');




