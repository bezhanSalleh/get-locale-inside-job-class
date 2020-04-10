<?php

use App\Jobs\TestJob;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('locale/{locale}', 'SwitchLanguageController');

Route::get('/dispatch-job', function() {
    TestJob::dispatch();
    session()->put('status','Job dispatched and email was sent in ' .app()->getLocale() . ' language.');
    session()->save();
    return redirect()->back();
});
