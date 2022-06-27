<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\DistricController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\NoticeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[MainController::class,'main']);

//depency
Route::get('get/division/{division_id}', [MainController::class, 'GetSubcat']);
Route::get('get/distric/{distric_id}', [MainController::class, 'GetHos']);

Route::get('get/medicine/{medicineid}', [MainController::class, 'GetMedicine']);

  Route::post('reporter/store',[ReportController::class,'ReportalStore'])->name('reporter.store');
  Route::post('patient/store',[ReportController::class,'PatientStore'])->name('patient.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/logout',[UserController::class,'Logout'])->middleware('auth');
Route::get('user/profile',[UserController::class,'UserProfile'])->name('user.profile')->middleware('auth');
Route::post('update/user/profile',[UserController::class,'UpdateProfile'])->middleware('auth')->name('update.user.profile');

Route::get('change/password',[UserController::class,'ChangePassword'])->name('change.password')->middleware('auth');

Route::post('admin-check-current-password',[UserController::class,'CheckAdminPassword'])->name('admin.check.current.password')->middleware('auth');
Route::post('update/password',[UserController::class,'UpdatePassword'])->name('update.password')->middleware('auth');

//division route
 Route::get('division/all',[DivisionController::class,'all'])->name('division.all')->middleware('auth');
  Route::get('division/add',[DivisionController::class,'add'])->name('division.add')->middleware('auth');
  Route::post('division/store',[DivisionController::class,'store'])->name('division.store')->middleware('auth');
  Route::get('division/edit/{id}',[DivisionController::class,'edit'])->name('division.edit')->middleware('auth');
  Route::get('division/delete/{id}',[DivisionController::class,'delete'])->name('division.delete')->middleware('auth');
  Route::post('division/update/{id}',[DivisionController::class,'update'])->name('division.update')->middleware('auth');

  //distric route
 Route::get('distric/all',[DistricController::class,'all'])->name('distric.all')->middleware('auth');
  Route::get('distric/add',[DistricController::class,'add'])->name('distric.add')->middleware('auth');
  Route::post('distric/store',[DistricController::class,'store'])->name('distric.store')->middleware('auth');
  Route::get('distric/edit/{id}',[DistricController::class,'edit'])->name('distric.edit')->middleware('auth');
  Route::get('distric/delete/{id}',[DistricController::class,'delete'])->name('distric.delete')->middleware('auth');
  Route::post('distric/update/{id}',[DistricController::class,'update'])->name('distric.update')->middleware('auth');



    //hospital route
 Route::get('hospital/all',[HospitalController::class,'all'])->name('hospital.all')->middleware('auth');
  Route::get('hospital/add',[HospitalController::class,'add'])->name('hospital.add')->middleware('auth');
  Route::post('hospital/store',[HospitalController::class,'store'])->name('hospital.store')->middleware('auth');
  Route::get('hospital/edit/{id}',[HospitalController::class,'edit'])->name('hospital.edit')->middleware('auth');
  Route::get('hospital/delete/{id}',[HospitalController::class,'delete'])->name('hospital.delete')->middleware('auth');
  Route::post('hospital/update/{id}',[HospitalController::class,'update'])->name('hospital.update')->middleware('auth');

    //medicine route
 Route::get('medicine/all',[MedicineController::class,'all'])->name('medicine.all')->middleware('auth');
  Route::get('medicine/add',[MedicineController::class,'add'])->name('medicine.add')->middleware('auth');
  Route::post('medicine/store',[MedicineController::class,'store'])->name('medicine.store')->middleware('auth');
  Route::get('medicine/edit/{id}',[MedicineController::class,'edit'])->name('medicine.edit')->middleware('auth');
  Route::get('medicine/delete/{id}',[MedicineController::class,'delete'])->name('medicine.delete')->middleware('auth');
  Route::post('medicine/update/{id}',[MedicineController::class,'update'])->name('medicine.update')->middleware('auth');


      //department route
 Route::get('department/all',[DepartmentController::class,'all'])->name('department.all')->middleware('auth');
  Route::get('department/add',[DepartmentController::class,'add'])->name('department.add')->middleware('auth');
  Route::post('department/store',[DepartmentController::class,'store'])->name('department.store')->middleware('auth');
  Route::get('department/edit/{id}',[DepartmentController::class,'edit'])->name('department.edit')->middleware('auth');
  Route::get('department/delete/{id}',[DepartmentController::class,'delete'])->name('department.delete')->middleware('auth');
  Route::post('department/update/{id}',[DepartmentController::class,'update'])->name('department.update')->middleware('auth');

//route notice
   Route::get('reporter/report',[NoticeController::class,'ReportalReport'])->name('reporter.report')->middleware('auth');
   Route::get('patient/report',[NoticeController::class,'PatientReport'])->name('patient.report')->middleware('auth');