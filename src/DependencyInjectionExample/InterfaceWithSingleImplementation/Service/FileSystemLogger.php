<?php

namespace App\DependencyInjectionExample\InterfaceWithSingleImplementation\Service;

final class FileSystemLogger implements LoggerInterface
{
    public function log(string $message): void
    {
        // create file and log message
    }
}