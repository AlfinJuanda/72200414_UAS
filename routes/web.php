<?php

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
use App\Http\Controllers\WaktuController;
use App\Http\Controllers\Tbl72200414Controller;
use Illuminate\Http\Request;

Route::get('/a', 'FormController@showForm')->name('a');
Route::get('/b', 'FormController@showResult')->name('b');
Route::post('/b', 'FormController@processForm')->name('process-form');
Route::get('/a', function () {
    return view('a');
});

Route::post('/submit', function (Illuminate\Http\Request $request) {
    $selectedValues = $request->input('values', []);
    return view('b', compact('selectedValues'));
});
Route::get('/', function () {
    return view('welcome');
});

Route::view('/a', 'a');
Route::post('/process-form', function (Request $request) {
    $option = $request->input('option');
    $values = $request->input('values', []);
    return redirect()->route('b')->with(['option' => $option, 'values' => $values]);
});

Route::get('/b', function () {
    $option = session('option');
    $values = session('values', []);

    return view('b', ['option' => $option, 'values' => $values]);
})->name('b');

Route::get('/tbl72200414', [Tbl72200414Controller::class, 'index'])->name('tbl72200414');

Route::get('/greeting', [WaktuController::class, 'greeting']);
