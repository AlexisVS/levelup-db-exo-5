<?php

use App\Http\Controllers\HopitalController;
use Illuminate\Support\Facades\Route;

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
    return view('Home');
});
Route::resource('/hopitals', HopitalController::class);
Route::get('/patients', function () {
    return view('pages.patients.index');
});

Route::get('/patients/dossier-medicale/{patientId}', function ($patientId) {
    $data = [
        'patientId' => $patientId
    ];

    return view('pages.patients.dossier_medicale.dossierMedicale', $data);
});
