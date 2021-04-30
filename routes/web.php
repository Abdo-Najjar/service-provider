<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Services\Visitor;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::get('draw'  , [PaymentController::class , 'withDraw'])->name('withDraw');










Route::get('page1', function (Visitor $visitor) {


    $visitor->visitingPageProcess('page1');

    return view('page1');
});


Route::get('page2', function (Visitor $visitor) {

    $visitor->visitingPageProcess('page2');

    return view('page2');
});
