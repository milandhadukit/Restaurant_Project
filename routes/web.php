<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\FoodCategoryController;
use App\Http\Controllers\Admin\ItemFoodController;
use App\Http\Controllers\Admin\TableDetailsController;


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
    return view('loginpage');
});

// Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/loginpage', function () {
    return view('loginpage');
});
Route::post('/login-admin', [AuthController::class, 'customLogin'])->name('login-admin');

Route::get('/add-category', [FoodCategoryController::class, 'addFoodCategories'])->name('add-categories');
Route::post('/store-category', [FoodCategoryController::class, 'storeFoodCategories'])->name('store-categories');
Route::get('/view-category', [FoodCategoryController::class, 'viewFoodCategories'])->name('view-categories');
Route::get('/delete-category/{id}', [FoodCategoryController::class, 'deleteFoodCategories'])->name('delete-categories');
Route::get('/edit-category/{id}', [FoodCategoryController::class, 'editFoodCategories'])->name('edit-categories');
Route::post('/update-category/{id}', [FoodCategoryController::class, 'updateFoodCategories'])->name('update-categories');


Route::get('/add-item', [ItemFoodController::class, 'addFoodItems'])->name('add-items');
Route::post('/store-item', [ItemFoodController::class, 'storeFoodItems'])->name('store-items');
Route::get('/view-item', [ItemFoodController::class, 'viewFoodItems'])->name('view-items');
Route::get('/delete-items/{slug}', [ItemFoodController::class, 'deleteFoodItems'])->name('delete-items');
Route::get('/edit-items/{slug}', [ItemFoodController::class, 'editFoodItems'])->name('edit-items');

Route::get('/add-detail', [TableDetailsController::class, 'addTableDetail'])->name('add-table');
Route::get('/view-detail', [TableDetailsController::class, 'viewTableDetails'])->name('view-table');
Route::post('/store-detail', [TableDetailsController::class, 'storeTableDetail'])->name('store-table');
Route::get('/edit-detail/{id}', [TableDetailsController::class, 'editTableDetails'])->name('edit-table');
Route::post('/update-detail/{id}', [TableDetailsController::class, 'updateTableDetails'])->name('update-table');

