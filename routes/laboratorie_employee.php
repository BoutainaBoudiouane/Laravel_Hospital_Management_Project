<?php


use App\Http\Controllers\Dashboard_Doctor\DiagnosticController;
use App\Http\Controllers\Dashboard_Doctor\LaboratorieController;
use App\Http\Controllers\Dashboard_Doctor\RayController;
use App\Http\Controllers\Dashboard_Doctor\PatientDetailsController;
use App\Http\Controllers\Dashboard_Ray_Employee\InvoiceController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| doctor Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {


    //################################ dashboard laboratorie_employee ########################################

    Route::get('/dashboard/laboratorie_employee', function () {
        return view('Dashboard.dashboard_LaboratorieEmployee.dashboard');
    })->middleware(['auth:laboratorie_employee'])->name('dashboard.laboratorie_employee');
    //################################ end dashboard laboratorie_employee #####################################




//---------------------------------------------------------------------------------------------------------------


    require __DIR__ . '/auth.php';

});





