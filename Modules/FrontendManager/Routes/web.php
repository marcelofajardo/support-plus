<?php

Route::prefix('frontend')->group(function () {
    Route::post("contacts", 'ContactController@store')->name('contacts.store');
    Route::middleware(['auth', 'verified'])->group(function () {


        Route::middleware(['isSuperAdmin'])->group(function () {
            Route::resource("banners", 'BannerController')->only(['index', 'store']);
            Route::resource("email-subscriptions", 'EmailSubscriptionController')->except(['create', 'store', 'edit', 'update', 'show']);

            Route::get("email-subscriptions-composer", 'EmailSubscriptionController@mail')->name('subscriptions.mail');
            Route::post("email-subscriptions-composer", 'EmailSubscriptionController@mailSubmit');

            Route::resource("faqs", 'FaqController');
            Route::resource("features", 'FeatureController');
            Route::resource("testimonials", 'TestimonialController');
            Route::resource("pages", 'PageController');
            Route::resource("partners", 'PartnerController');
            Route::resource("workflows", 'WorkflowController');
            Route::resource("contacts", 'ContactController')->only(['index', 'destroy']);
        });

        Route::resource("themes", 'ThemeController')->middleware('isAdminOrSuperAdmin');
    });

});


