<?php

test('class has private constructor')
    ->expect('Tests\Fixtures\Arch\ToHaveNonPublicConstructor\HasPrivateConstructor')
    ->toHaveNonPublicConstructor();

test('class has protected constructor')
    ->expect('Tests\Fixtures\Arch\ToHaveNonPublicConstructor\HasProtectedConstructor')
    ->toHaveNonPublicConstructor();

test('class has public constructor')
    ->expect('Tests\Fixtures\Arch\ToHaveConstructor\HasConstructor\HasConstructor')
    ->not->toHaveNonPublicConstructor();
