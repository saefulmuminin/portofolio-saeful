<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\HeroSliderController;
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\SidebarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Admin\MessageController as AdminMessageController;

// Sidebar route
Route::get('/sidebar', [SidebarController::class, 'index'])->name('sidebar');

// Sending message route
Route::post('/send-message', [MessageController::class, 'sendMessage'])->name('send.message');

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('portfolios/{title}', [HomeController::class, 'show'])->name('user.show');

// Admin routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin'], 'as' => 'admin.'], function () {
    // Dashboard route
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // User management routes
    Route::resource('users', UserController::class)->except(['show']);

    // Hero Sliders routes
    Route::resource('hero_sliders', HeroSliderController::class);

    // About Us routes
    Route::resource('about_us', AboutUsController::class)->except(['show']);

    // Services routes
    Route::resource('services', ServiceController::class);

    // Skills routes
    Route::resource('skills', SkillController::class);

    // Education routes
    Route::resource('educations', EducationController::class);

    // Experience routes
    Route::resource('experiences', ExperienceController::class);

    // Portfolio routes
    Route::resource('portfolios', PortfolioController::class);

    // Certificate routes
    Route::resource('certificates', CertificateController::class);

    // Message routes
    Route::resource('messages', AdminMessageController::class);
});
