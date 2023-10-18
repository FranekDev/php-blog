<?php

use Core\Session;

it('saves user data in session', function () {
    Session::put('test', 'message');

    expect(Session::get('test'))->toBe('message');
});

it('has user in session', function () {
    Session::put('user', 'Name');

    expect(Session::has('user'))->toBeTrue();
});

