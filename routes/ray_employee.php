<?php


use App\Http\Controllers\Dashboard_Doctor\DiagnosticController;
use App\Http\Controllers\Dashboard_Doctor\LaboratorieController;
use App\Http\Controllers\Dashboard_Doctor\RayController;
use App\Http\Controllers\Dashboard_Doctor\PatientDetailsController;
use App\Http\Controllers\Dashboard_Ray_Employee\InvoiceController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {


    //dashboard doctor 
    Route::get('/dashboard/ray_employee', function () {
        return view('Dashboard.dashboard_RayEmployee.dashboard');
    })->middleware(['auth:ray_employee'])->name('dashboard.ray_employee');
    //#end dashboard doctor

    Route::middleware(['auth:ray_employee'])->group(function () {

        //invoices route
         Route::resource('invoices_ray_employee', InvoiceController::class);
         Route::get('completed_invoices_rays', [InvoiceController::class,'completed_invoices'])->name('completed_invoices_rays');
        //#end invoices route

        //show details of patient rays
        Route::get('rays/{id}', [InvoiceController::class,'viewRays'])->name('view_rays');
        });

    require __DIR__ . '/auth.php';

});





