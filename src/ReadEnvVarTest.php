<?php

use App\ReadEnvVar;

it('returns a value from .env', function () {
    expect(ReadEnvVar::execute('VAR_ONE'))->toBe('foo');
});

it('throws an exception for a missing env var', function () {
    ReadEnvVar::execute('DR_NOUT');
})->throws(Exception::class);

it('reads an exported envvar', function () {
    $_ENV['FOOFOO'] = 'foo';
    expect(ReadEnvVar::execute('FOOFOO'))->toBe('foo');
});
