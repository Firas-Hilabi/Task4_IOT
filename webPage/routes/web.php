<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\models\sensor;
use App\models\direction;
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

Route::get('/connect', function () {
    return view('index');
});
Route::get('/forward', function () {
    return view('index');
});
Route::get('/left', function () {
    return view('index');
});
Route::get('/stop', function () {
    return view('index');
});
Route::get('/right', function () {
    return view('index');
});
Route::get('/backward', function () {
    return view('index');
});


Route::put('/connect', function () {
    return view('index');
});


Route::post('/forward', function (Request $request ) {
    $formFields['direction']='forward';
    direction::create($formFields);
    return redirect()->back();
})->name("forward");

Route::post('/left', function (Request $request ) {
    $formFields['direction']='left';
    direction::create($formFields);
    return redirect()->back();
})->name("left");

Route::post('/stop', function (Request $request ) {
    $formFields['direction']='stop';
    direction::create($formFields);
    return redirect()->back();
})->name("stop");

Route::post('/right', function (Request $request ) {
    $formFields['direction']='right';
    direction::create($formFields);
    return redirect()->back();
})->name("right");

Route::post('/backward', function (Request $request ) {
    $formFields['direction']='backward';
    direction::create($formFields);
    return redirect()->back();
})->name("backward");

