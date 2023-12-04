<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthenticationController as auth;
use App\Http\Controllers\Backend\UserController as user;
use App\Http\Controllers\Backend\RoleController as role;
use App\Http\Controllers\Backend\DashboardController as dashboard;
use App\Http\Controllers\Backend\PermissionController as permission;
use App\Http\Controllers\Backend\CustomerController as customer;
use App\Http\Controllers\Backend\CategoryController as category;
use App\Http\Controllers\Backend\DoseController as dose;
use App\Http\Controllers\Backend\CompaniesController as companies;
use App\Http\Controllers\Backend\SupplierController as supplier;
use App\Http\Controllers\Backend\MedicineController as medicine;
use App\Http\Controllers\Backend\PurchaseController as purchase;
use App\Http\Controllers\Backend\EmployeeController as employee;
use App\Http\Controllers\Backend\AttendancesController as attendances;



// use App\Models\MedicineCategory;

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

Route::get('/register', [auth::class,'signUpForm'])->name('register');
Route::post('/register', [auth::class,'signUpStore'])->name('register.store');
Route::get('/login', [auth::class,'signInForm'])->name('login');
Route::post('/login', [auth::class,'signInCheck'])->name('login.check');
Route::get('/logout', [auth::class,'singOut'])->name('logOut');

Route::middleware(['checkauth'])->prefix('admin')->group(function(){
    Route::get('dashboard', [dashboard::class,'index'])->name('dashboard');
    Route::get('/product_search', [PurchaseController::class,'product_search'])->name('pur.product_search');
    Route::get('/product_search_data', [PurchaseController::class,'product_search_data'])->name('pur.product_search_data');
});
Route::middleware(['checkrole'])->prefix('admin')->group(function(){
    Route::resource('user', user::class); //1st is for url and 2nd one is controller alice name
    Route::resource('role', role::class);
    Route::resource('customer', customer::class);
    Route::resource('category', Category::class);
    Route::resource('dose', dose::class);
    Route::resource('companies', companies::class);
    Route::resource('supplier', supplier::class);
    Route::resource('medicine', medicine::class);
    Route::resource('purchase', purchase::class);
    Route::resource('employee', employee::class);
    Route::resource('attendances', attendances::class);
    Route::resource('medicineCategory', MedicineCategory::class);
    Route::get('permission/{role}', [permission::class,'index'])->name('permission.list');
    Route::post('permission/{role}', [permission::class,'save'])->name('permission.save');

});

// Route::get('/profile', function () {
//     return view('backend.user.userprofile')->name('profile');
// });
// Route::view('backend/customer/index', 'backend.customer.index');

