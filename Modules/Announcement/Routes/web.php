<?php
Route::prefix('announcement')->middleware(['auth', 'verified', 'isSuperAdmin'])->group(function () {
    Route::resource("popups", 'PopupController');
});

