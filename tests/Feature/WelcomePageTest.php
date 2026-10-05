<?php

declare(strict_types=1);

use Tests\TestCase;

uses(TestCase::class);

it('returns HTTP 200 for GET /', function (): void {
    $this->withoutVite()->get('/')->assertStatus(200);
});
