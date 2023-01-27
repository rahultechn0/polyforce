<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CronController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReportController;

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
Route::get('/', [IndexController::class,'index'] );
Route::get('/', [IndexController::class,'index'] )->name('home');
Route::get('indexNew', [IndexController::class,'indexNew'] )->name('indexNew');
Route::get('ido', [IndexController::class,'ido'] );
Route::get('ido-admin', [IndexController::class,'idoAdmin'] );
// Route::get('index', [IndexController::class,'index'] )->name('index');
Route::post('registerFrm', [IndexController::class,'registerFrm'] );
Route::post('registerCheck', [IndexController::class,'registerCheck'] );
Route::post('login', [IndexController::class,'login'] );

Route::get('register/{registerId?}', [IndexController::class,'register'] );

Route::post('userTree', [DashboardController::class,'userTree'] )->name("userTree");
Route::get('users', [DashboardController::class,'users'] )->name("users");
// Route::get('packageAct', [DashboardController::class,'packageAct'] )->name("packageAct");
Route::get('logout', [DashboardController::class,'logout'] )->name('logout');
Route::post('checkPackageRequest', [DashboardController::class,'checkPackageRequest'] );
Route::get('getPrice', [DashboardController::class,'getPrice'] );
Route::post('addPackageRequest', [DashboardController::class,'addPackageRequest'] );

Route::post('checkUser', [DashboardController::class,'checkUser'] );
Route::post('withRe', [DashboardController::class,'withRe'] );
Route::post('unstack', [DashboardController::class,'unstack'] );
Route::get('package', [DashboardController::class,'package'] )->name("package");
Route::get('matchingIncome', [DashboardController::class,'matchingIncome'] )->name("matchingIncome");

//User reports
Route::get('roi-report', [ReportController::class,'roiReport'] )->name('roi-report');
Route::get('package-report', [ReportController::class,'packageReport'] )->name('package-report');
Route::get('level-report', [ReportController::class,'levelReport'] )->name('level-report');
Route::get('referral-report', [ReportController::class,'referralReport'] )->name('referral-report');
Route::get('leadership', [ReportController::class,'leadership'] )->name('leadership');
// Route::get('leadership-report', [ReportController::class,'leadershipReport'] )->name('leadership-report');
// Route::get('newLevelReport', [ReportController::class,'newLevelReport'] )->name('newLevelReport');
Route::get('withdrawal-report', [ReportController::class,'withdrawalReport'] )->name('withdrawal-report');
Route::get('network', [ReportController::class,'network'] )->name('network');
Route::post('get-team-info', [ReportController::class,'getTeamInfo'] )->name('get-team-info');


/******************Cron URL***************/
Route::get('investCron', [CronController::class,'investCron'] );//every 1 minute
Route::get('withupdate', [CronController::class,'withupdate'] );//every 5 minute
Route::get('roiCron',    [CronController::class,'roiCron'] );//every day
Route::get('registerCron',[CronController::class,'registerCron'] ); //every 1 minute
Route::get('matchingReward',[CronController::class,'matchingReward'] ); //every 1 minute

/* Admin Links */
Route::get('admin', [AdminController::class,'admin'] )->name('admin');
Route::post('admin/login', [AdminController::class,'adminLogin'] );
Route::get('admin/dashboard', [AdminController::class,'adminDashboard'] )->name('adminDashboard');
Route::get('admin/userlist', [AdminController::class,'userlist'] )->name('userlist');
Route::get('admin/deposit-list', [AdminController::class,'depositlist'] )->name('deposit-list');
Route::get('admin/referral-report', [AdminController::class,'referralIncome'] )->name('referral-report');
Route::get('admin/leadership-report', [AdminController::class,'leadershipIncome'] )->name('leadership-report');
Route::get('admin/roi-report', [AdminController::class,'roiIncome'] )->name('roi-report');
Route::get('admin/level-report', [AdminController::class,'levelIncome'] )->name('level-report');
Route::get('admin/incentive-report', [AdminController::class,'incentiveIncome'] )->name('incentive-report');
Route::get('admin/withdrawal-report', [AdminController::class,'withdrawalIncome'] )->name('withdrawal-report');
Route::get('admin/profile', [AdminController::class,'profile'] )->name('profile');
Route::post('admin/profile', [AdminController::class,'saveProfile'] )->name('profile');
Route::get('admin/set-price', [AdminController::class,'setPrice'] )->name('set-price');
Route::post('admin/update-price', [AdminController::class,'updatePrice'] )->name('update-price');



