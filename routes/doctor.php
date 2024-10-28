<?php


use App\Http\Controllers\doctor\InvoiceController;
use App\Http\Controllers\Dashboard_Doctor\DiagnosticController;
use App\Http\Controllers\Dashboard_Doctor\RayController;
use App\Http\Controllers\Dashboard_Doctor\PatientDetailsController;
use App\Http\Controllers\Dashboard_Doctor\LaboratorieController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Chat\Createchat;
use App\Livewire\Chat\Main;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        //dashboard doctor
        Route::get('/dashboard/doctor', function () {
            return view('Dashboard.doctor.dashboard');
        })->middleware(['auth:doctor'])->name('dashboard.doctor');
        //end dashboard doctor

        //---------------------------------------------------------------------------------------------------------------
        Route::middleware(['auth:doctor'])->group(function () {

            Route::prefix('doctor')->group(function () {

                //completed_invoices route
                Route::get('completed_invoices', [InvoiceController::class, 'completedInvoices'])->name('completedInvoices');

                //review_invoices route
                Route::get('review_invoices', [InvoiceController::class, 'reviewInvoices'])->name('reviewInvoices');

                //invoices route
                Route::resource('invoices', InvoiceController::class);

                //review_invoices route 
                Route::post('add_review', [DiagnosticController::class, 'addReview'])->name('add_review');

                //Diagnostics route
                Route::resource('Diagnostics', DiagnosticController::class);

                //rays route 
                Route::resource('rays', RayController::class);

                //Laboratories route 
                Route::resource('Laboratories', LaboratorieController::class);
                Route::get('show_laboratorie/{id}', [InvoiceController::class, 'showLaboratorie'])->name('show.laboratorie');

                //patient_details route 
                Route::get('patient_details/{id}', [PatientDetailsController::class, 'index'])->name('patient_details');

                //Chat route
                Route::get('list/patients', Createchat::class)->name('list.patients');
                Route::get('chat/patients', Main::class)->name('chat.patients');
            
                Route::get('/404', function () {
                    return view('Dashboard.404');
                })->name('404');
            });
        });
        require __DIR__ . '/auth.php';
    }
);
