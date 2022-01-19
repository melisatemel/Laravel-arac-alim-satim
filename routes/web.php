<?php

use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AracController;
use App\Http\Controllers\Admin\FaqController;
use Illuminate\Support\Facades\Route;





Route::redirect('/anasayfa', '/home')->name('anasayfa');
Route::get('/dashboard', function () {
    return redirect('/admin');
});

Route::get('/', function () {
    return view('home.index');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('homepage');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/arac/{id}', [HomeController::class, 'arac'])->name('arac');
Route::get('/categoryaracs/{id}', [HomeController::class, 'categoryaracs'])->name('categoryaracs');

Route::post('/getarac', [HomeController::class, 'getarac'])->name('getarac');
Route::get('/araclist/{search}', [HomeController::class, 'araclist'])->name('araclist');


//ADMİN
Route::middleware('auth')->prefix('admin')->group(function () {   //prefix sayesinde başlarına admin ekledik.

    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');
    Route::get('/myreviews', [\App\Http\Controllers\Admin\UserController::class, 'myreviews'])->name('myreviews');
    Route::get('/destroymyreview/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroymyreview'])->name('user_review_delete');

    #Admin Role

    Route::middleware('admin')->group(function () {


        # Category
        Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
        Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
        Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
        Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
        Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
        Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
        Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');

        # Arac
        Route::prefix('arac')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\AracController::class, 'index'])->name('admin_arac');
            Route::get('create', [\App\Http\Controllers\Admin\AracController::class, 'create'])->name('admin_arac_add');
            Route::post('store', [\App\Http\Controllers\Admin\AracController::class, 'store'])->name('admin_arac_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\AracController::class, 'edit'])->name('admin_arac_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\AracController::class, 'update'])->name('admin_arac_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\AracController::class, 'destroy'])->name('admin_arac_delete');
            Route::get('show', [\App\Http\Controllers\Admin\AracController::class, 'show'])->name('admin_arac_show');
        });

        Route::prefix('messages')->group(function () {
            Route::get('/', [MessageController::class, 'index'])->name('admin_message');
            Route::get('edit/{id}', [MessageController::class, 'edit'])->name('admin_message_edit');
            Route::post('update/{id}', [MessageController::class, 'update'])->name('admin_message_update');
            Route::get('delete/{id}', [MessageController::class, 'destroy'])->name('admin_message_delete');
            Route::get('show', [MessageController::class, 'show'])->name('admin_message_show');
        });

        # Arac Image Galery
        Route::prefix('image')->group(function () {
            Route::get('create/{arac_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
            Route::post('store/{arac_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
            Route::get('delete/{id}/{arac_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
            Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
        });
        #Settings
        Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
        Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

        #Faq
        Route::prefix('faq')->group(function () {
            Route::get('/', [FaqController::class, 'index'])->name('admin_faq');
            Route::get('create', [FaqController::class, 'create'])->name('admin_faq_add');
            Route::post('store', [FaqController::class, 'store'])->name('admin_faq_store');
            Route::get('edit/{id}', [FaqController::class, 'edit'])->name('admin_faq_edit');
            Route::post('update/{id}', [FaqController::class, 'update'])->name('admin_faq_update');
            Route::get('delete/{id}', [FaqController::class, 'destroy'])->name('admin_faq_delete');
            Route::get('show', [FaqController::class, 'show'])->name('admin_faq_show');
        });

        #review
        Route::prefix('review')->group(function () {

            Route::get('/', [\App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('admin_review');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'update'])->name('admin_review_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'destroy'])->name('admin_review_delete');
            Route::get('show/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'show'])->name('admin_review_show');
        });
             # User
        Route::prefix('user')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_users');
            Route::post('create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_add');
            Route::post('store', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
            Route::get('edit/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::post('update/{id}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::get('delete/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
            Route::get('show/{id}', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
            Route::get('userrole/{id}', [App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
            Route::post('userrolestore/{id}', [App\Http\Controllers\Admin\UserController::class, 'user_role_store'])->name('admin_user_role_add');
            Route::get('userroledelete/{userid}/{roleid}', [App\Http\Controllers\Admin\UserController::class, 'user_role_delete'])->name('admin_user_role_delete');
        
        });
        
    }); #adminrole
}); #auth



Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {

    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('myprofile');
});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {   //prefix sayesinde başlarına admin ekledik.
    Route::get('/profile', [\App\Http\Controllers\UserController::class, 'index'])->name('userprofile');

    Route::prefix('arac')->group(function () {
        Route::get('/', [AracController::class, 'index'])->name('user_arac');
        Route::get('create', [AracController::class, 'create'])->name('user_arac_add');
        Route::post('store', [AracController::class, 'store'])->name('user_arac_store');
        Route::get('edit/{id}', [AracController::class, 'edit'])->name('user_arac_edit');
        Route::post('update/{id}', [AracController::class, 'update'])->name('user_arac_update');
        Route::get('delete/{id}', [AracController::class, 'destroy'])->name('user_arac_delete');
        Route::get('show', [AracController::class, 'show'])->name('user_arac_show');
    });

    #Arac Image Gallery
    Route::prefix('image')->group(function () {

        Route::get('create/{arac_id}', [\App\Http\Controllers\ImageController::class, 'create'])->name('user_image_add');
        Route::post('store/{arac_id}', [\App\Http\Controllers\ImageController::class, 'store'])->name('user_image_store');
        Route::get('delete/{id}/{arac_id}', [\App\Http\Controllers\ImageController::class, 'destroy'])->name('user_image_delete');
        Route::get('show', [\App\Http\Controllers\ImageController::class, 'show'])->name('user_image_show');
    });
});

Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
