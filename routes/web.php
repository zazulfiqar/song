<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\SatNightPartyController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BeatmixController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BeatmixsongsController;
use App\Http\Controllers\SubscribedsongController;

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('betmixsongs', [BeatmixsongsController::class, 'index'])->name('betmixsongs');
Route::get('betmixsongscreate', [BeatmixsongsController::class, 'create'])->name('betmixsongscreate');
Route::post('betmixsongsstore', [BeatmixsongsController::class, 'store'])->name('betmixsongsstore');
Route::get('betmixsongsdelete/{id}', [BeatmixsongsController::class, 'destroy'])->name('betmixsongsdelete');
Route::get('betmixsongsedit/{id}', [BeatmixsongsController::class, 'show'])->name('betmixsongsedit');
Route::post('betmixsongseditone/{id}', [BeatmixsongsController::class, 'edit'])->name('betmixsongseditone');

Route::get('subscribestore/{id}', [SubscribedsongController::class, 'store'])->name('subscribestore');
Route::get('subscribesongs', [SubscribedsongController::class, 'index'])->name('subscribesongs');
Route::get('paypal/{id}', array('as' => 'paypal','uses' => 'PayPalController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'status','uses' => 'PayPalController@getPaymentStatus',));

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'Admin',
], function() {
    Auth::routes([
        'register' => false
    ]);

    Route::middleware('auth:admin')->group(function() {
     
        
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

        Route::middleware('role')->group(function() {
            Route::resource('roles', 'RoleController');

            Route::resource('admins', 'AdminController');

            Route::get('admins/{admin}/password/change', 'AdminController@changePassword')
                ->name('admins.password.change');
            Route::post('admins/{admin}/password/change', 'AdminController@updatePassword')
                ->name('admins.password.update');

            Route::get('admins/{admin}/roles', 'AdminController@roles')
                ->name('admins.roles');
            Route::post('admins/{admin}/roles', 'AdminController@setRoles')
                ->name('admins.roles.set');

            Route::resource('users', 'UserController');

            Route::get('users/{user}/password/change', 'UserController@changePassword')
                ->name('users.password.change');
            Route::post('users/{user}/password/change', 'UserController@updatePassword')
                ->name('users.password.update');
                
               
        });
    });
});
Route::get('/', [SatNightPartyController::class, 'index2'])->name('index');
Route::get('sat_night', [SatNightPartyController::class, 'index'])->name('sat_night');
Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('beatmixx', [BeatmixController::class, 'index'])->name('beatmixx');
Route::get('about', [AboutController::class, 'index'])->name('about');

