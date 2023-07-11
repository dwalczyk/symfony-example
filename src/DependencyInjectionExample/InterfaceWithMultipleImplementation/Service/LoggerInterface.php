<?php

namespace App\DependencyInjectionExample\InterfaceWithMultipleImplementation\Service;

interface LoggerInterface
{
    public function log(string $message): void;
}