<?php
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::get('logout', [LoginController::class, 'logout']);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('change-password', [ProfileController::class, 'changePassword'])->name('profile.change-password');
    Route::post('change-password', [ProfileController::class, 'changePasswordSubmit']);
    Route::post('/mark-as-read', [HomeController::class, 'markNotification'])->name('markNotification');
});

Route::get('/', [WebsiteController::class, 'index']);
Route::get('/features', [WebsiteController::class, 'features']);
Route::get('/blog', [WebsiteController::class, 'blog']);
Route::get('/blog-details/{slug}', [WebsiteController::class, 'blogDetails'])->name('blogDetails');
Route::get('/faq', [WebsiteController::class, 'faq']);
Route::get('/contact', [WebsiteController::class, 'contact']);
Route::get('/pricing', [WebsiteController::class, 'pricing']);
Route::get('/privacy', [WebsiteController::class, 'privacy']);
Route::get('/condition', [WebsiteController::class, 'condition']);


Route::get('auth/social', [LoginController::class, 'showLoginForm'])->name('social.login');
Route::get('oauth/{driver}', [LoginController::class, 'redirectToProvider'])->name('social.oauth');
Route::get('oauth/{driver}/callback', [LoginController::class, 'handleProviderCallback'])->name('social.callback');
Route::get('autologin/{user}', [LoginController::class, 'autoLogin'])->name('auto.login');

Route::post('change-status', [AjaxController::class, 'changeStatus'])->name('changeStatus')->middleware('auth');
Route::prefix('ajax')->group(function () {
    Route::get('get-state-by-country-id/{country_id}', [AjaxController::class, 'getStatusByCountryId'])->name('getStatusByCountryId');
});
