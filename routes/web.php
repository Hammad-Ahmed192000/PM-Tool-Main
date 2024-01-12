<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
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

Route::get('/', function () {
    return view('welcome');
});

// users start
Route::get('/getUsers', [UserController::class, 'index'])->name('usersList');

Route::get('/addUsers', [UserController::class, 'view'])->name('usersAdd');

Route::post('/storeUsers', [UserController::class, 'store'])->name('usersStore');

// users end

// comapnies module start
Route::get('/getCompanies', [CompanyController::class, 'index'])->name('CompaniesList');

Route::get('/addCompanies', [CompanyController::class, 'view'])->name('CompaniesAdd');

Route::post('/storeCompanies', [CompanyController::class, 'store'])->name('CompaniesStore');

// comapnies module end

// project start

Route::get('/getProjects', [ProjectController::class, 'index'])->name('ProjectsList');

Route::get('/getProjectsCard', [ProjectController::class, 'cardList'])->name('ProjectsCardList');


Route::get('/addProjects', [ProjectController::class, 'view'])->name('ProjectsAdd');

Route::post('/storeProjects', [ProjectController::class, 'store'])->name('ProjectsStore');

Route::post('/detailsProjects', [ProjectController::class, 'details'])->name('ProjectsDetails');

Route::get('/get-users/{companyId}', [ProjectController::class, 'getUsers']);

Route::get('/fetch-users', [ProjectController::class, 'fetchUsers']);



// project end

Route::get('/getdocuments', [ProjectController::class, 'documents'])->name('DocumentsList');


Route::get('/optimize', function () {
    \Artisan::call('optimize');
    echo 'All Optimization done ';
});

Route::get('/cache', function () {
    \Artisan::call('optimize:clear');
    \Artisan::call('config:cache');
    echo 'All cache Cleared';
});