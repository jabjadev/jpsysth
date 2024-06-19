<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;




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

// Route::get('', function () {
//     return view('en/index');
// });
// Route::get('/', function () {
//     return view('index');
// });

// Route::get('index', function () {
//     return view('index');
// });


// Route::get('new-release', function () {
//     return view('new-release');
// });

// Route::get('it-service', function () {
//     return view('it-service');
// });

// Route::get('online-marketing', function () {
//     return view('online-marketing');
// });

// Route::get('company', function () {
//     return view('company');
// });

// Route::get('contact', function () {
//     return view('contact');
// });

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () { //...

        /** Localized Routes here **/

        Route::get('', function () {
            return view('index');
        });
        Route::get('/', function () {
            return view('index');
        });

        Route::get('/index', function () {
            return view('index');
        });


        Route::get('/new-release', function () {
            return view('new-release');
        });

        Route::get('/it-service', function () {
            return view('it-service');
        });

        Route::get('/online-marketing', function () {
            return view('online-marketing');
        });

        Route::get('/company', function () {
            return view('company');
        });

        Route::get('/contact', function () {
            return view('contact');
        });

        // Mailgub here
        Route::post('/contact', [ContactController::class, 'send']);

    }
);

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/



// Mailable route here
