<?php


Route::middleware(['auth', 'verified', 'isSuperAdmin'])->group(function () {
    Route::resource("blog-categories", 'BlogCategoryController')->except('show');
    Route::resource("blog-posts", 'BlogPostController');
});

