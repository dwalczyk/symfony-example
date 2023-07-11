<?php

namespace App\DependencyInjectionExample\InterfaceWithSingleImplementation\Service;

interface LoggerInterface
{
    public function log(string $message): void;
}