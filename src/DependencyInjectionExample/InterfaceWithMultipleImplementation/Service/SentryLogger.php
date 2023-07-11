<?php

namespace App\DependencyInjectionExample\InterfaceWithMultipleImplementation\Service;

final class SentryLogger implements LoggerInterface
{
    public function log(string $message): void
    {
        // request to sentry
    }
}