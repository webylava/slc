<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

/* Route::get('/countries',  [CountryController::class, 'index']);
Route::get('/countries/create',  [CountryController::class, 'create']); */
Route::get('send-mail', function () {
   
  $details = [
      'title' => 'Sample Title From Mail',
      'body' => 'This is sample content we have added for this test mail'
  ];
 
  Mail::to('rana.wapfluid@gmail.com')->send(new \App\Mail\UserCreated($details));
 
  dd("Email is Sent, please check your inbox.");
});

Route::group(['middleware' => ['auth']], function() {
    Route::resource('countries', CountryController::class);
	Route::get('/companies/autocomplete', [App\Http\Controllers\CompanyController::class, 'autocomplete'])->name('companies.autocomplete');
	Route::get('/companies/all', [App\Http\Controllers\CompanyController::class, 'all'])->name('companies.all');
    Route::resource('companies', App\Http\Controllers\CompanyController::class);
    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::resource('sales', App\Http\Controllers\SaleController::class);
	Route::get('/products/all', [App\Http\Controllers\ProductController::class, 'all'])->name('products.all');
    Route::resource('products', App\Http\Controllers\ProductController::class);
	//Route::resource('roles.permissions', App\Http\Controllers\RoleController::class);

    Route::match(['get', 'post'], 'roles/{role}/permissions', [App\Http\Controllers\RoleController::class,'assignPermissions'])->name('roles.permissions'); 
    Route::get('/settings',  [App\Http\Controllers\SettingController::class, 'index']);
    Route::get('/settings/app',  [App\Http\Controllers\SettingController::class, 'app']);
    Route::get('/settings/crm',  [App\Http\Controllers\SettingController::class, 'crm']);
    
    
    Route::match(['get', 'post'], 'settings/color', [App\Http\Controllers\SettingController::class, 'color'])->name('settings.color');
    Route::match(['get', 'post'], 'settings/global', [App\Http\Controllers\SettingController::class, 'siteGlobal'])->name('settings.global');
    Route::match(['get', 'post'], 'settings/payment', [App\Http\Controllers\SettingController::class, 'payment'])->name('settings.payment');
    Route::match(['get', 'post'], 'settings/tax', [App\Http\Controllers\SettingController::class, 'tax'])->name('settings.tax');
    Route::match(['get', 'post'], 'settings/business', [App\Http\Controllers\SettingController::class, 'business'])->name('settings.business');
    Route::match(['get', 'post'], 'settings/users', [App\Http\Controllers\SettingController::class, 'users'])->name('settings.users');
   
	/***** user route *****/
    Route::match(['get', 'post'], 'users/create/{type?}', [App\Http\Controllers\UserController::class, 'create'])->name('users.client');
	Route::get('/users/all/{type?}', [App\Http\Controllers\UserController::class, 'all'])->name('users.all');
	Route::get('/clients', [App\Http\Controllers\UserController::class, 'client'])->name('users.clients');
	Route::resource('users', App\Http\Controllers\UserController::class);
	/* Route::get('/users/{comment}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');	
	Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');	
	Route::post('/users/create', [App\Http\Controllers\UserController::class, 'store']);
	Route::post('/users/create', [App\Http\Controllers\UserController::class, 'store']);
	Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index'); */
	//Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->middleware('role:admin')->name('users.index');
}); 