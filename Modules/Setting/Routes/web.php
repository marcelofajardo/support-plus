<?php

use Illuminate\Support\Facades\Route;
use Rap2hpoutre\LaravelLogViewer\LogViewerController;


Route::prefix('setting')->middleware(['auth', 'verified'])->group(function () {


    Route::middleware(['isAdminOrSuperAdmin'])->group(function () {
        Route::resource("users", 'UserController');
    });


    Route::middleware(['isSuperAdmin'])->group(function () {
        Route::group(['prefix' => 'localization', 'as' => 'localization.', 'middleware' => [
            'auth'
        ]], function () {
            Route::resource("languages", 'LanguageController');
            Route::get('translates', 'LanguageController@index')->name('languages.index');
            Route::get('translates/view/{language_code}', 'LocalizationController@index')->name('translate.index');
            Route::post('/get-translate-file', 'LocalizationController@get_translate_file')->name('language.get_translate_file');
            Route::post('/languages/key_value_store', 'LocalizationController@key_value_store')->name('languages.key_value_store');
        });

        Route::resource("cron", 'CronController')->only('index', 'store');
        Route::resource("queue", 'QueueController')->only('index', 'store');
        Route::resource("countries", 'CountryController');
        Route::resource("states", 'StateController');
        Route::resource("cities", 'CityController');
        Route::resource("zones", 'ZoneController')->only('index', 'edit', 'update');
        Route::resource("utilities", 'UtilityController')->only('index', 'store');
        Route::resource("updates", 'UpdateController')->only('index', 'store');
        Route::resource("general-settings", 'GeneralSettingController')->only('index', 'store');
        Route::resource("email-settings", 'EmailSettingController')->only('index', 'store');
        Route::post('email-settings-test', 'EmailSettingController@test')->name('email-settings.test');
        Route::resource("recaptchas", 'RecaptchaController')->only('index', 'store');
        Route::resource("cookies", 'CookieController')->only('index', 'store');
        Route::resource("social-settings", 'SocialSettingController');
        Route::resource("terms", 'TermController')->only('index', 'update');
        Route::resource("currencies", 'CurrencyController');
        Route::resource("preferences", 'PreferenceController')->except('delete', 'create', 'store');
        Route::resource("ip-blocks", 'IpBlockController')->except('show');
        Route::resource("plugins", 'PluginController')->only('index', 'store');
        Route::get('logs', [LogViewerController::class, 'index']);



    });


    Route::middleware(['isNotSuperAdmin'])->group(function () {
        Route::resource("roles", 'RoleController');
        Route::get("roles/permission/{id}", 'RoleController@permission')->name('roles.permission');
        Route::post("roles/permission/{id}", 'RoleController@permissionSubmit');
    });
});


Route::get('setting/change-language/{code}', 'LocalizationController@changeLanguage')->name('localization.language.changeLanguage');








