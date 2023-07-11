<?php

namespace App\DependencyInjectionExample\SingleService\Service;

final class FileSystemLogger
{
    public function log(string $message): void
    {
        // create file and log message
    }
}