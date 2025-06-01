<?php

namespace App\ApiResource;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use App\Controller\SentryTestController;
use App\Dto\SentryTestOutput;

#[ApiResource(
    operations: [
        new Get(
            uriTemplate: '/_sentry-test',
            controller: SentryTestController::class,
            output: SentryTestOutput::class,
            read: false,
            name: 'sentry_test'
        )
    ],
    paginationEnabled: false
)]
final class SentryTestResource
{
}
