<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\LoginViewIndex;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Livewire\Pages\Admin\Staff\AdminStaffIndex;
use App\Http\Livewire\Pages\Admin\Staff\AdminStaffManage;
use App\Http\Livewire\Pages\Admin\Dashboard\AdminDashboardIndex;
use App\Http\Livewire\Pages\Staff\Dashboard\StaffDashboardIndex;
use App\Http\Livewire\Pages\Admin\RoleManagement\AdminRoleManagementIndex;
use App\Http\Livewire\Pages\Admin\RoleManagement\AdminRoleManagementManage;



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

Route::get('/login', function () {
    return redirect(route('landing-page'));
});

Auth::routes([
    'register' => false,
    'login' => false,
    'verify' => true,
]);

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', LoginViewIndex::class)->name('landing-page');
});

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'verified'], function () {
        Route::group(['middleware' => 'admin'], function () {
            Route::get('/admin/dashboard',AdminDashboardIndex::class)->name('admin.dashboard.index');
            Route::get('/admin/staff',AdminStaffIndex::class)->name('admin.staff.index');
            Route::get('/admin/staff/create',AdminStaffManage::class)->name('admin.staff.manage');
            Route::get('/admin/role-management',AdminRoleManagementIndex::class)->name('admin.role-management.index');
            Route::get('/admin/manage/role-management',AdminRoleManagementManage::class)->name('admin.role-management.manage.index');
        });
    });
});

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'verified'], function () {
        Route::group(['middleware' => 'staff'], function () {
            Route::get('/staff/dashboard',StaffDashboardIndex::class)->name('staff.dashboard.index');
        });
    });
});
