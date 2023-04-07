<?php

use App\Http\Controllers\CategoryContoller;
use App\Http\Controllers\NewsController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Artisan;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
//setiap mau menampilkan sesuatu harus memakai retun
Route::match(['get','post'],'/register',function(){
    return redirect('login');
});


Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/category', CategoryContoller::class);
    Route::resource('/news', NewsController::class);
    Route::resource('/slider', SliderController::class);
    Route::resource('/siswa',SiswaController::class);
    Route::resource('/santri',SantriController::class);
//search
    Route::get('/search-Category',[CategoryContoller::class,'searchCategory'])->name('searchCategory');
    Route::get('/search-News',[NewsController::class,'searchNews'])->name('searchNews');
    Route::get('/chage-pasword',[ProfileController::class,'editpassword'])->name('editpassword');
    Route::put('/update-pasword',[ProfileController::class,'updatepassword'])->name('updatepassword');
});

//frontend
Route::get('/', [\App\Http\Controllers\FrontEndController::class,'index']);
Route::get('/detail-category/{slug}',[\App\Http\Controllers\FrontEndController::class,'detailCategory'])->name('detailCategory');
Route::get('/detailNews/{slug}',[\App\Http\Controllers\FrontEndController::class,'detailNews'])->name('detailNews');
Route::get('/search-News-End',[\App\Http\Controllers\FrontEndController::class,'searchNewsEnd'])->name('searchNewsEnd');

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
    return 'link has been connected';
});

// Clear application cache:
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    return 'Application cache has been cleared';
});

//Clear route cache:
Route::get('/route-cache', function () {
    Artisan::call('route:cache');
    return 'Routes cache has been cleared';
});

//Clear config cache:
Route::get('/config-cache', function () {
    Artisan::call('config:cache');
    return 'Config cache has been cleared';
});

// Clear view cache:
Route::get('/view-clear', function () {
    Artisan::call('view:clear');
    return 'View cache has been cleared';
});
