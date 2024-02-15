<?php

use App\Action;

it('returns the supplied argument', function () {
    expect(Action::execute('raa'))->toBe('raa');
});

