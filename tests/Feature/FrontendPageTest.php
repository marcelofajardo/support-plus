<?php

// Main Menu Items Render test

test('it can render the homepage', function () {

    $this->get('/')
        ->assertSee('Home')
        ->assertSee('Explore our features')
        ->assertSee('Copyright © 2022 | All Right Reserved');
});

it('can see Feature page', function () {
    $this->get('features')
        ->assertSee('Explore our features');
});

it('can see price page', function () {
    $this->get('pricing')
        ->assertSee('Most Popular')
        ->assertSee('Choose the plan that fits for your team')
        ->assertSee('Subscription');
});

it('can see Blog page', function () {
    $this->get('blog')
        ->assertSee('All Categories')
        ->assertSee('Read more');
});

it('can see FAQ page', function () {
    $this->get('faq')
        ->assertSee('Frequently Asked Questions');
});

it('can see contact page', function () {
    $this->get('contact')
        ->assertSee('Get in touch')
        ->assertSee('Send');
});

it('can render login page', function () {
    $this->get('login')
        ->assertSee('Welcome back');

});

it('can render signup page', function () {
    $this->get('register')
        ->assertSee('Create Account')
        ->assertSee('Back to Homepage')
        ->assertSee('Already have an account');

});

it('can render privacy page', function () {
    $this->get('privacy')
        ->assertSee('Privacy Policy');

});

it('can see cookie alart', function(){
    $this->get('/')
        ->assertSee('Accept cookies');
});

// Admin login test
it('can login', function () {
    $this->post('login', [
        'email' => 'admin@gmail.com',
        'password' => '123456'
    ])
        ->assertSessionHasNoErrors()
        ->assertRedirect('/home');
});

// Business login test
// it('can login as business', function () {
//     $this->post('login', [
//         'email' => 'business@gmail.com',
//         'password' => '12345678'
//     ])
//         ->assertSessionHasNoErrors()
//         ->assertRedirect('/business/businesses');
// });


// it('can subscribe', function () {
//     $this->post('frontend/email-subscriptions', [
//         'email' => 'admin@gmail.com',
//     ])
//         ->assertSessionHasNoErrors()
//         ->assertRedirect('/');
// });
