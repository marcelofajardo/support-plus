<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


Breadcrumbs::for('localization.languages.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.Languages'), route('localization.languages.index'));
});
Breadcrumbs::for('localization.languages.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.Languages'), route('localization.languages.index'));
    $trail->push(trans('common.Create'), route('localization.languages.create'));
});
Breadcrumbs::for('localization.languages.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.Languages'), route('localization.languages.index'));
    $trail->push(trans('common.Edit'), route('localization.languages.edit', $model));
});


Breadcrumbs::for('countries.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.Countries'), route('countries.index'));
});
Breadcrumbs::for('countries.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.Countries'), route('countries.index'));
    $trail->push(trans('common.Create'), route('countries.create'));
});
Breadcrumbs::for('countries.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.Countries'), route('countries.index'));
    $trail->push(trans('common.Edit'), route('countries.edit', $model));
});


Breadcrumbs::for('zones.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.Zones'), route('zones.index'));
});
Breadcrumbs::for('zones.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.Zones'), route('zones.index'));
    $trail->push(trans('common.Edit'), route('zones.edit', $model));
});


Breadcrumbs::for('states.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.States'), route('states.index'));
});
Breadcrumbs::for('states.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.States'), route('states.index'));
    $trail->push(trans('common.Create'), route('states.create'));
});
Breadcrumbs::for('states.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.States'), route('states.index'));
    $trail->push(trans('common.Edit'), route('states.edit', $model));
});

Breadcrumbs::for('cities.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.Cities'), route('cities.index'));
});
Breadcrumbs::for('cities.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.Cities'), route('cities.index'));
    $trail->push(trans('common.Create'), route('cities.create'));
});
Breadcrumbs::for('cities.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.Cities'), route('cities.index'));
    $trail->push(trans('common.Edit'), route('cities.edit', $model));
});


Breadcrumbs::for('currencies.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.Currencies'), route('currencies.index'));
});
Breadcrumbs::for('currencies.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.Currencies'), route('currencies.index'));
    $trail->push(trans('common.Create'), route('currencies.create'));
});
Breadcrumbs::for('currencies.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.Currencies'), route('currencies.index'));
    $trail->push(trans('common.Edit'), route('currencies.edit', $model));
});


Breadcrumbs::for('utilities.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.Utilities'), route('utilities.index'));
});


Breadcrumbs::for('updates.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.Update'), route('updates.index'));
});


Breadcrumbs::for('general-settings.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.General Setting'), route('general-settings.index'));
});


Breadcrumbs::for('recaptchas.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.reCaptcha'), route('recaptchas.index'));
});


Breadcrumbs::for('plugins.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.Plugins'), route('plugins.index'));
});


Breadcrumbs::for('cookies.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.Cookie'), route('cookies.index'));
});


Breadcrumbs::for('email-settings.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.Email Setting'), route('email-settings.index'));
});


Breadcrumbs::for('terms.edit', function (BreadcrumbTrail $trail) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.Term of service'), route('terms.index'));
});


Breadcrumbs::for('roles.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.Roles'), route('roles.index'));
});
Breadcrumbs::for('roles.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.Roles'), route('roles.index'));
    $trail->push(trans('common.Create'), route('roles.create'));
});
Breadcrumbs::for('roles.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.Roles'), route('roles.index'));
    $trail->push(trans('common.Edit'), route('roles.edit', $model));
});
Breadcrumbs::for('roles.permission', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.Roles'), route('roles.index'));
    $trail->push(trans('setting.Permissions'), route('roles.permission', $model));
});


Breadcrumbs::for('social-settings.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.Social Setting'), route('social-settings.index'));
});
Breadcrumbs::for('social-settings.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.Social Setting'), route('social-settings.index'));
    $trail->push(trans('common.Create'), route('social-settings.create'));
});
Breadcrumbs::for('social-settings.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('setting.System Setting'), '#');
    $trail->push(trans('setting.Social Setting'), route('social-settings.index'));
    $trail->push(trans('common.Edit'), route('social-settings.edit', $model));
});


Breadcrumbs::for('users.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('common.Users'), route('users.index'));
});
Breadcrumbs::for('users.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('common.Users'), route('users.index'));
    $trail->push(trans('common.Create'), route('users.create'));
});
Breadcrumbs::for('users.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('common.Users'), route('users.index'));
    $trail->push(trans('common.Edit'), route('users.edit', $model));
});

Breadcrumbs::for('preferences.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('setting.Preference'), route('preferences.index'));
});

Breadcrumbs::for('preferences.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('setting.Preference'), route('preferences.index'));
    $trail->push(trans('common.Edit'), route('preferences.edit', $model));
});


Breadcrumbs::for('customers.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('sales.Customers'), route('customers.index'));
});
Breadcrumbs::for('customers.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('sales.Customers'), route('customers.index'));
    $trail->push(trans('common.Create'), route('customers.create'));
});
Breadcrumbs::for('customers.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('common.Customers'), route('customers.index'));
    $trail->push(trans('common.Edit'), route('customers.edit', $model));
});

Breadcrumbs::for('sales.products.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('common.Products'), route('sales.products.index'));
});
Breadcrumbs::for('sales.products.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('common.Products'), route('sales.products.index'));
    $trail->push(trans('common.Create'), route('sales.products.create'));
});
Breadcrumbs::for('sales.products.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('common.Products'), route('sales.products.index'));
    $trail->push(trans('common.Edit'), route('sales.products.edit', $model));
});


Breadcrumbs::for('purchases.products.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('common.Products'), route('purchases.products.index'));
});
Breadcrumbs::for('purchases.products.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('common.Products'), route('purchases.products.index'));
    $trail->push(trans('common.Create'), route('purchases.products.create'));
});
Breadcrumbs::for('purchases.products.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('common.Products'), route('purchases.products.index'));
    $trail->push(trans('common.Edit'), route('purchases.products.edit', $model));
});

Breadcrumbs::for('ip-blocks.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('setting.Ip Block'), route('ip-blocks.index'));
});
Breadcrumbs::for('ip-blocks.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('setting.Ip Block'), route('ip-blocks.index'));
    $trail->push(trans('common.Create'), route('ip-blocks.create'));
});
Breadcrumbs::for('ip-blocks.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('setting.Ip Block'), route('ip-blocks.index'));
    $trail->push(trans('common.Edit'), route('ip-blocks.edit', $model));
});

//--------------------

Breadcrumbs::for('email-subscriptions.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('frontendmanager.Email Subscription'), route('email-subscriptions.index'));
});
Breadcrumbs::for('email-subscriptions.mail', function (BreadcrumbTrail $trail) {
    $trail->push(trans('frontendmanager.Email Subscription'), route('email-subscriptions.index'));
    $trail->push(trans('frontendmanager.Mail to Subscribers'), route('subscriptions.mail'));
});


Breadcrumbs::for('contacts.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('frontendmanager.Contact'), route('contacts.index'));
});


Breadcrumbs::for('faqs.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('frontendmanager.FAQs'), route('faqs.index'));
});
Breadcrumbs::for('faqs.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('frontendmanager.FAQs'), route('faqs.index'));
    $trail->push(trans('common.Create'), route('faqs.create'));
});
Breadcrumbs::for('faqs.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('frontendmanager.FAQs'), route('faqs.index'));
    $trail->push(trans('common.Edit'), route('faqs.edit', $model));
});

Breadcrumbs::for('features.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('frontendmanager.Features'), route('features.index'));
});
Breadcrumbs::for('features.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('frontendmanager.Features'), route('features.index'));
    $trail->push(trans('common.Create'), route('features.create'));
});
Breadcrumbs::for('features.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('frontendmanager.Features'), route('features.index'));
    $trail->push(trans('common.Edit'), route('features.edit', $model));
});

Breadcrumbs::for('testimonials.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('frontendmanager.Testimonials'), route('testimonials.index'));
});
Breadcrumbs::for('testimonials.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('frontendmanager.Testimonials'), route('testimonials.index'));
    $trail->push(trans('common.Create'), route('testimonials.create'));
});
Breadcrumbs::for('testimonials.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('frontendmanager.Testimonials'), route('testimonials.index'));
    $trail->push(trans('common.Edit'), route('testimonials.edit', $model));
});


Breadcrumbs::for('pages.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('frontendmanager.Pages'), route('pages.index'));
});
Breadcrumbs::for('pages.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('frontendmanager.Pages'), route('pages.index'));
    $trail->push(trans('common.Create'), route('pages.create'));
});
Breadcrumbs::for('pages.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('frontendmanager.Pages'), route('pages.index'));
    $trail->push(trans('common.Edit'), route('pages.edit', $model));
});


Breadcrumbs::for('blog-categories.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('blog.Blog'), '#');
    $trail->push(trans('blog.Categories'), route('blog-categories.index'));
});
Breadcrumbs::for('blog-categories.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('blog.Blog'), '#');
    $trail->push(trans('blog.Categories'), route('blog-categories.index'));
    $trail->push(trans('common.Create'), route('blog-categories.create'));
});
Breadcrumbs::for('blog-categories.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('blog.Blog'), '#');
    $trail->push(trans('blog.Categories'), route('blog-categories.index'));
    $trail->push(trans('common.Edit'), route('blog-categories.edit', $model));
});

Breadcrumbs::for('blog-posts.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('blog.Blog'), '#');
    $trail->push(trans('blog.Posts'), route('blog-posts.index'));
});
Breadcrumbs::for('blog-posts.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('blog.Blog'), '#');
    $trail->push(trans('blog.Posts'), route('blog-posts.index'));
    $trail->push(trans('common.Create'), route('blog-posts.create'));
});
Breadcrumbs::for('blog-posts.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('blog.Blog'), '#');
    $trail->push(trans('blog.Posts'), route('blog-posts.index'));
    $trail->push(trans('common.Edit'), route('blog-posts.edit', $model));
});


Breadcrumbs::for('business.categories.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('business.Business'), route('business-categories.index'));
});
Breadcrumbs::for('business.categories.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('business.Business'), route('business-categories.index'));
    $trail->push(trans('common.Create'), route('business-categories.create'));
});
Breadcrumbs::for('business.categories.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('business.Business'), route('business-categories.index'));
    $trail->push(trans('common.Edit'), route('business-categories.edit', $model));
});

Breadcrumbs::for('categories.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('common.Category'), route('business-categories.index'));
});
Breadcrumbs::for('categories.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('common.Category'), route('categories.index'));
    $trail->push(trans('common.Create'), route('categories.create'));
});
Breadcrumbs::for('categories.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('common.Category'), route('categories.index'));
    $trail->push(trans('common.Edit'), route('categories.edit', $model));
});


Breadcrumbs::for('businesses.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('common.Category'), route('businesses.index'));
});
Breadcrumbs::for('businesses.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('common.Category'), route('businesses.index'));
    $trail->push(trans('common.Create'), route('businesses.create'));
});
Breadcrumbs::for('businesses.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('common.Category'), route('businesses.index'));
    $trail->push(trans('common.Edit'), route('businesses.edit', $model));
});

Breadcrumbs::for('tax-types.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('tax.Tax') . ' ' . trans('tax.Type'), route('tax-types.index'));
});
Breadcrumbs::for('tax-types.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('tax.Tax') . ' ' . trans('tax.Type'), route('tax-types.index'));
    $trail->push(trans('common.Create'), route('tax-types.create'));
});
Breadcrumbs::for('tax-types.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('tax.Tax') . ' ' . trans('tax.Type'), route('tax-types.index'));
    $trail->push(trans('common.Edit'), route('tax-types.edit', $model));
});

Breadcrumbs::for('taxes.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('tax.Tax') . ' ' . trans('tax.Type'), route('taxes.index'));
});
Breadcrumbs::for('taxes.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('tax.Tax') . ' ' . trans('tax.Type'), route('taxes.index'));
    $trail->push(trans('common.Create'), route('taxes.create'));
});
Breadcrumbs::for('taxes.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('tax.Tax') . ' ' . trans('tax.Type'), route('taxes.index'));
    $trail->push(trans('common.Edit'), route('taxes.edit', $model));
});

Breadcrumbs::for('packages.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('subscription.Subscription'), route('packages.index'));
});
Breadcrumbs::for('packages.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('subscription.Subscription'), route('packages.index'));
    $trail->push(trans('common.Create'), route('packages.create'));
});
Breadcrumbs::for('packages.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('subscription.Subscription'), route('packages.index'));
    $trail->push(trans('common.Edit'), route('packages.edit', $model));
});


Breadcrumbs::for('vendors.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('purchases.Vendors'), route('vendors.index'));
});
Breadcrumbs::for('vendors.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('purchases.Vendors'), route('vendors.index'));
    $trail->push(trans('common.Create'), route('vendors.create'));
});
Breadcrumbs::for('vendors.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('purchases.Vendors'), route('vendors.index'));
    $trail->push(trans('common.Edit'), route('vendors.edit', $model));
});


Breadcrumbs::for('expenses.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('purchases.Expenses'), route('expenses.index'));
});
Breadcrumbs::for('expenses.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('purchases.Expenses'), route('expenses.index'));
    $trail->push(trans('common.Create'), route('expenses.create'));
});
Breadcrumbs::for('expenses.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('purchases.Expenses'), route('expenses.index'));
    $trail->push(trans('common.Edit'), route('expenses.edit', $model));
});


Breadcrumbs::for('package-features.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('subscription.Package Features'), route('package-features.index'));
});

Breadcrumbs::for('package-features.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('subscription.Package Features'), route('package-features.index'));
    $trail->push(trans('common.Edit'), route('package-features.edit', $model));
});


Breadcrumbs::for('payment-methods.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('payment.Payment Method'), route('payment-methods.index'));
});


Breadcrumbs::for('payment-methods.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('payment.Payment Method'), route('package-features.index'));
    $trail->push(trans('common.Edit'), route('package-features.edit', $model));
});


Breadcrumbs::for('themes.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('frontendmanager.Themes'), route('themes.index'));
});
Breadcrumbs::for('themes.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('frontendmanager.Themes'), route('themes.index'));
    $trail->push(trans('common.Create'), route('themes.create'));
});
Breadcrumbs::for('themes.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('frontendmanager.Themes'), route('themes.index'));
    $trail->push(trans('common.Edit'), route('themes.edit', $model));
});

Breadcrumbs::for('offline.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('payment.Payment'), '#');
    $trail->push(trans('payment.Offline Payment'), route('offline.index'));
});

Breadcrumbs::for('my-plan.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('subscription.Subscription'), '#');
    $trail->push(trans('subscription.My Plan'), route('my-plan.index'));
});


Breadcrumbs::for('payments.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('payment.Payment'), route('payments.index'));
});
Breadcrumbs::for('payments.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('payment.Payment'), route('payments.index'));
    $trail->push(trans('common.Create'), route('payments.create'));
});
Breadcrumbs::for('payments.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('payment.Payment'), route('payments.index'));
    $trail->push(trans('common.Edit'), route('payments.edit', $model));
});


Breadcrumbs::for('invoice-settings.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('business.Business'), '#');
    $trail->push(trans('business.Invoice Setting'), route('invoice-settings.index'));
});

Breadcrumbs::for('subscription-settings.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('subscription.Subscription'), '#');
    $trail->push(trans('subscription.Subscription Setting'), route('subscription-settings.index'));
});
Breadcrumbs::for('cron.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('setting.Setting'), '#');
    $trail->push(trans('setting.Cron'), route('cron.index'));
});
Breadcrumbs::for('queue.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('setting.Setting'), '#');
    $trail->push(trans('setting.Queue'), route('queue.index'));
});

Breadcrumbs::for('report.subscription.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('report.Report'), '#');
    $trail->push(trans('report.Subscription Log'), route('report.subscription.index'));
});

Breadcrumbs::for('api.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('setting.Setting'), '#');
    $trail->push(trans('setting.API'), route('api.index'));
});

Breadcrumbs::for('estimates.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('sales.Estimates'), route('estimates.index'));
});
Breadcrumbs::for('estimates.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('sales.Estimates'), route('estimates.index'));
    $trail->push(trans('common.Create'), route('estimates.create'));
});
Breadcrumbs::for('estimates.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('sales.Estimates'), route('estimates.index'));
    $trail->push(trans('common.Edit'), route('estimates.edit', $model));
});

Breadcrumbs::for('invoices.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('sales.Invoices'), route('invoices.index'));
});
Breadcrumbs::for('invoices.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('sales.Invoices'), route('invoices.index'));
    $trail->push(trans('common.Create'), route('estimates.create'));
});
Breadcrumbs::for('invoices.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('sales.Invoices'), route('invoices.index'));
    $trail->push(trans('common.Edit'), route('invoices.edit', $model));
});

Breadcrumbs::for('bills.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('purchases.Bills'), route('bills.index'));
});
Breadcrumbs::for('bills.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('purchases.Bills'), route('bills.index'));
    $trail->push(trans('common.Create'), route('estimates.create'));
});
Breadcrumbs::for('bills.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('purchases.Bills'), route('bills.index'));
    $trail->push(trans('common.Edit'), route('bills.edit', $model));
});

Breadcrumbs::for('popups.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('popup.Popup'), route('bills.index'));
});
Breadcrumbs::for('popups.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('popup.Popup'), route('popups.index'));
    $trail->push(trans('common.Create'), route('popups.create'));
});
Breadcrumbs::for('popups.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('popup.Popup'), route('popups.index'));
    $trail->push(trans('common.Edit'), route('popups.edit', $model));
});

Breadcrumbs::for('partners.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('frontendmanager.Partners'), route('partners.index'));
});
Breadcrumbs::for('partners.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('frontendmanager.Partners'), route('partners.index'));
    $trail->push(trans('common.Create'), route('partners.create'));
});
Breadcrumbs::for('partners.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('frontendmanager.Partners'), route('partners.index'));
    $trail->push(trans('common.Edit'), route('partners.edit', $model));
});


Breadcrumbs::for('workflows.index', function (BreadcrumbTrail $trail) {
    $trail->push(trans('frontendmanager.Workflows'), route('partners.index'));
});
Breadcrumbs::for('workflows.create', function (BreadcrumbTrail $trail) {
    $trail->push(trans('frontendmanager.Workflows'), route('workflows.index'));
    $trail->push(trans('common.Create'), route('workflows.create'));
});
Breadcrumbs::for('workflows.edit', function (BreadcrumbTrail $trail, $model) {
    $trail->push(trans('frontendmanager.Workflows'), route('workflows.index'));
    $trail->push(trans('common.Edit'), route('workflows.edit', $model));
});
