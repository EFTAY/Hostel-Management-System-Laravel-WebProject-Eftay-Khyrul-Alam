<?php

use App\Models\HostelMeal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\student\StudentInformationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HostleSeatsController;
use App\Http\Controllers\MonthlyBillController;
use App\Http\Controllers\StudentMealController;
use App\Http\Controllers\AclManagementController;
use App\Http\Controllers\meal\HostelMealController;
use App\Http\Controllers\student\StudentAuthController;
use App\Http\Controllers\StudentAuthenticationController;
use App\Http\Controllers\student\StudentInformationControlller;

// use Illuminate\Routing\Route as RoutingRoute;

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
        return redirect()->route('login');
    });

/* System Route*/ 
Auth::routes([
    'logout'=> False
]);

        Route::get('/home', [HomeController::class, 'index'])->name('home');

                                                /** Admin Module Route*/
        Route::group(['middleware'=>'auth'],function(){

        Route::get('logout',[UserController::class,'logout'])-> name('logout');
        Route::get('user-profile',[UserController::class,'profile'])-> name('user.profile');
        Route::get('user-profile-edit/{userID}',[UserController::class,'edit'])-> name('user.edit');
        Route::match(['put','patch'],'user-profile/update/{userID}',[UserController::class,'update'])->name('user.update');
        // Route::resource('student-information',StudentInformationController::class);
        Route::resource('student-information',StudentInformationControlller::class);
        //  PDF dawnload er jonno or card option 
        Route::get('student-information/download/{studentID}',[StudentInformationControlller::class,'studentInformationDownload'])->name('student-information.download');
        Route::resource('hostle-seats',HostleSeatsController::class);
        Route::get('student-information/destroy/{id}',[StudentInformationControlller::class,'destroy'])->name('student-information.destroy'); // show file theke student k delete korte chachhi
        Route::get('hostle-meal/destroy/{id}',[HostelMealController::class,'destroy'])->name('hostle-meal.destroy');
        Route::resource('hostle-meal',HostelMealController::class)->except('destroy');
        Route::get('hostel-meal/download/{id}',[HostelMealController::class,'informationDownload'])->name('hostel-meal.download');
        Route::get('monthly-bills/destroy/{id}',[MonthlyBillController::class,'destroy'])->name('monthly-bills.destroy');
        Route::resource('monthly-bills',MonthlyBillController::class)->except('destroy');
        //  ACL Management 
        Route::resource('acl-management',AclManagementController::class);
        // Route::get('acl-management',[AclManagementController::class,'store'])->name('acl-management.store');
        
});


                            /*
                            Student Portal Routes
                            */
        Route::group(['prefix'=>'student'],function(){

        Route::get('login',[StudentAuthController::class,'showLogin'])->name('student.login'); //Public
        Route::post('login/perform',[StudentAuthController::class,'login'])->name('student.login.perform'); 
        Route::group(['middleware' => 'student'], function(){
        Route::get('dashboard',[StudentAuthController::class,'studentDashboard'])->name('student.dashboard');
        Route::get('logout',[StudentAuthController::class,'logout'])->name('student.logout');
        Route::get('settings',[StudentAuthController::class,'settings'])->name('student.settings');
        Route::match(['put','patch'],'update-Image',[StudentAuthController::class,'updateImage'])->name('student.update.image');
        Route::get('view',[StudentAuthController::class,'view'])->name('student.view');
        Route::post('meal-find',[StudentMealController::class,'findMeal'])->name('meal.find');
        Route::resource('meal',StudentMealController::class)->except('create','destroy');
    });//student ta karnel theke ashce 
        

});