<?php

use App\Http\Controllers\ajax;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\indexController;
use \App\Http\Controllers\aboutController;
use \App\Http\Controllers\blogController;
use \App\Http\Controllers\blogSingleController;
use \App\Http\Controllers\contactController;
use \App\Http\Controllers\faqController;
use \App\Http\Controllers\featuresController;
use \App\Http\Controllers\featuresSingleController;

use \App\Http\Controllers\dashboard\dashboardController;
use \App\Http\Controllers\dashboard\portfolioController;
use \App\Http\Controllers\dashboard\productController;
use \App\Http\Controllers\dashboard\productDetailController;

//use \App\Http\Controllers\dashboard\profileController;
use \App\Http\Controllers\dashboard\chatController;

use \App\Http\Controllers\dashboard\Auth\forgotPasswordController;
use \App\Http\Controllers\dashboard\Auth\lockedController;
use \App\Http\Controllers\dashboard\Auth\loginRegisterController;
use \App\Http\Controllers\dashboard\Auth\singInController;
use \App\Http\Controllers\dashboard\Auth\singUpController;

use \App\Http\Controllers\dashboard\management\categoryController;
use \App\Http\Controllers\dashboard\management\tagController;
use \App\Http\Controllers\dashboard\management\projectController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Laravel\Jetstream\Rules\Role;


Route::get('/', [indexController::class, 'index'])->name('index');

Route::get('/blog', [blogController::class, 'index'])->name('blog.index');

Route::get('/about', [aboutController::class, 'index'])->name('about.index');

Route::get('/blog-single', [blogSingleController::class, 'index'])->name('blog-single.index');

Route::get('/contact', [contactController::class, 'index'])->name('contact.index');

Route::get('/faq', [faqController::class, 'index'])->name('faq.index');

Route::get('/features', [featuresController::class, 'index'])->name('features.index');

Route::get('/features-single', [featuresSingleController::class, 'index'])->name('features-single.index');


Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard.index');

Route::get('/dashboard/chat', [chatController::class, 'index'])->name('dashboard.chat.index');

Route::get('/dashboard/portfolio', [portfolioController::class, 'index'])->name('dashboard.portfolio.index');

Route::get('/dashboard/products', [productController::class, 'index'])->name('dashboard.product.index');

Route::get('/dashboard/product-detail', [productDetailController::class, 'index'])->name('dashboard.product-detail.index');

//Route::get('/dashboard/profile', [profileController::class, 'index'])->name('dashboard.profile.index');

Route::group(['middleware' => ['XSS']], function () {
    Route::get('/dashboard/tags', [tagController::class, 'index'])->name('tags.index');
    Route::post('/dashboard/tag/create', [tagController::class, 'create'])->name('tags.create');
    Route::put('/dashboard/tag/update', [tagController::class, 'update'])->name('tags.update');
    Route::post('/dashboard/tag/delete', [tagController::class, 'destroy'])->name('tags.delete');

    Route::get('/dashboard/categories', [categoryController::class, 'index'])->name('categories.index');
    Route::post('/dashboard/category/create', [categoryController::class, 'create'])->name('categories.create');
    Route::put('/dashboard/category/update', [categoryController::class, 'update'])->name('categories.update');
    Route::post('/dashboard/category/delete', [categoryController::class, 'destroy'])->name('categories.delete');

    Route::get('/dashboard/projects', [projectController::class, 'index'])->name('projects.index');
    Route::get('/dashboard/project/add', [projectController::class, 'add'])->name('projects.add');
    Route::post('/dashboard/project/create', [projectController::class, 'create'])->name('projects.create');
    Route::get('/dashboard/project/{id}', [projectController::class, 'show'])->name('projects.show');
    Route::get('/dashboard/project/edit/{id}', [projectController::class, 'edit'])->name('projects.edit');
    Route::put('/dashboard/project/update/{id}', [projectController::class, 'update'])->name('projects.update');
    Route::post('/dashboard/project/delete', [projectController::class, 'destroy'])->name('projects.delete');
    Route::post('ckeditor/upload', [projectController::class, 'upload'])->name('ckeditor.upload');
    Route::post('/autocomplete-search', [projectController::class, 'autocompleteSearch'])->name('employees.getEmployees');


});
//Route::get('/', function () {
//
//    return view('index');
//})->name('index');
//
//Route::get('/blog', function () {
//
//    return view('blog');
//})->name('blog');
//
//Route::get('/about', function () {
//
//    return view('about');
//});
//
//Route::get('/blog-single', function () {
//
//    return view('blog-single');
//})->name('blog-single');
//
//Route::get('/contact', function () {
//
//    return view('contact');
//});
//
//Route::get('/faq', function () {
//
//    return view('faq');
//});
//
//
//Route::get('/features', function () {
//
//    return view('features');
//});
//
//Route::get('/features-single', function () {
//
//    return view('features-single');
//})->name('fea.single');
//
//
Route::prefix('dashboard')->middleware('auth')->group(function () {


    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/admins-list', [UserController::class, 'showAdmin'])->name('admins.list');
    Route::get('/users-list', [UserController::class, 'showUsers'])->name('users.list');
    Route::get('/architects-list', [UserController::class, 'showArchitects'])->name('architects.list');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destory');
    Route::get('/{id}/show-user-profile', [UserController::class, 'ShowProfile'])->name('user.showprofile');


    Route::get('/profile', [ProfileController::class, 'index'])->name('c');
    Route::post('/profile/city', [ProfileController::class, 'getcity'])->name('profile.city');
    Route::get('/profile/create', [ProfileController::class, 'create'])->name('profile.create');
    Route::post('/profile/create', [ProfileController::class, 'store'])->name('profile.store');
    Route::post('/{id}/profile', [ProfileController::class, 'storeuser'])->name('profile.user.store');

    Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/{id}/edit', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/{id}', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/comment', [CommentController::class, 'index'])->name('comment.index');
    Route::get('/comment/create', [CommentController::class, 'create'])->name('comment.create');
    Route::post('/comment', [CommentController::class, 'store'])->name('comment.store');
    Route::get('/comment/{id}', [CommentController::class, 'edit'])->name('comment.edit');
    Route::put('/comment', [CommentController::class, 'update'])->name('comment.update');
    Route::delete('/comment/{id}', [CommentController::class, 'destroy'])->name('comment.destroy');
});
//    Route::get('/', function () {
//
//        return view('dashboard.index');
//    })->name('dashboard');
//
//    Route::get('/chat', function () {
//
//        return view('dashboard.chat');
//    })->name('chat');
//
//    Route::get('/portfolio', function () {
//
//        return view('dashboard.portfolio');
//    })->name('portfolio');
//    Route::get('/products', function () {
//
//        return view('dashboard.products');
//    })->name('products');
//
//    Route::get('/products-detail', function () {
//
//        return view('dashboard.products-detail');
//    })->name('products-detail');
//
//    Route::get('/profiles', function () {
//
//        return view('dashboard.profile');
//    })->name('profiles.user');


/*Route::get('/dashboard/Auth/sign-in', [singInController::class, 'index'])->name('dashboard.auth.sing-in');

Route::get('/dashboard/Auth/sign-up', [singUpController::class, 'index'])->name('dashboard.auth.sing-up');

Route::get('/dashboard/Auth/login-register', [loginRegisterController::class, 'index'])->name('dashboard.auth.login-register');

Route::get('/dashboard/Auth/locked', [lockedController::class, 'index'])->name('dashboard.auth.locked');

Route::get('/dashboard/Auth/forgot-password', [forgotPasswordController::class, 'index'])->name('dashboard.auth.forgot-password');
*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard2', function () {
    return view('dashboard2');
})->name('dashboard2');
