<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;


Route::redirect('/anasayfa', '/home')->name('anasayfa');
Route::get('/dashboard', function () {
    return redirect('/admin');
});

Route::get('/', function () {
    return view('home.index');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');


//ADMİN
Route::middleware('auth')->prefix('admin')->group(function(){   //prefix sayesinde başlarına admin ekledik.
    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

    Route::get('category',[\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add',[\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create',[\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}',[\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}',[\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}',[\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show',[\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');

    Route::prefix('arac')->group(function(){
        Route::get('/',[\App\Http\Controllers\Admin\AracController::class, 'index'])->name('admin_arac');
        Route::get('/create',[\App\Http\Controllers\Admin\AracController::class, 'create'])->name('admin_arac_add');
        Route::post('store',[\App\Http\Controllers\Admin\AracController::class, 'store'])->name('admin_arac_create');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\AracController::class, 'edit'])->name('admin_arac_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\AracController::class, 'update'])->name('admin_arac_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\AracController::class, 'destroy'])->name('admin_arac_delete');
        Route::get('show',[\App\Http\Controllers\Admin\AracController::class, 'show'])->name('admin_arac_show');
    });
});




Route::get('/admin/login',[HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck',[HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout',[HomeController::class, 'logout'])->name('admin_logout');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
