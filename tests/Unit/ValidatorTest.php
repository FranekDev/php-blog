<?php

use Core\Validator;

test('Validator should return true on string of 5 characters', function () {
    expect(Validator::string('test', 2, 10))->toBeTrue();
});

test('Email', function () {
    expect(Validator::email('example@email.com'))->toBeTrue();
});
