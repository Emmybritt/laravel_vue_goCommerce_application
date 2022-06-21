<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\PopularCourseController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\QuestionController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware(['auth:sanctum'])->group(function () {
Route::post('/logout', [AuthController::class, 'logout']);    
Route::post('/create_role', [RolePermissionController::class, 'createRole']);    
Route::post('/create_permission', [RolePermissionController::class, 'createPermission']);    
Route::post('/assign_role_to_user/{id}/role/{roles}', [RolePermissionController::class, 'assignRoleToUser']);    
Route::post('/assign_permission_to_user/{id}/{permissions}', [RolePermissionController::class, 'assignPermissionToUser']);    
Route::post('/assign_permission_to_role/{role_id}/{permissions}', [RolePermissionController::class, 'assignPermissionToRole']);    
});
Route::post('/question', [QuestionController::class, 'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/popularCourse', [PopularCourseController::class, 'index']);
Route::get('/course', [CourseController::class, 'index']);
Route::get('/course_counts', [CourseController::class, 'getTotalcourseCount']);
Route::get('/course_details/{details}', [CourseController::class, 'getCourseDetails']);

// Route::get('/email/verify/{id}/{hash}', [AuthController::class, 'verified'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
// Route::post('/email/verification-notification', [AuthController::class, 'resendemailverificationlink'])->middleware(['auth','throttle:6,1'])->name('verification.send');

// i will create a route on my front end that will redirect my user to another oage, telling them that email verification has been sent to their mail
