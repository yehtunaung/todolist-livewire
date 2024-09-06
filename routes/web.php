<?php

use App\Livewire\CalendarComponent;
use App\Livewire\Counter;
use App\Livewire\TodayList;
use App\Livewire\User;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo-list', TodayList::class)->name('todo-list');

Route::get('/counter', Counter::class)->name('counter');
Route::get('/user', User::class)->name('user');
Route::get('/calendar',CalendarComponent::class)->name('calendar');

