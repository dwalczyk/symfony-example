<?php

namespace App\DependencyInjectionExample\InterfaceWithMultipleImplementation\Service;

final class FileSystemLogger implements LoggerInterface
{
    public function log(string $message): void
    {
        // create file and log message
    }
}