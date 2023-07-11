<?php

namespace App\DependencyInjectionExample\InterfaceWithSingleImplementation\Controller;

use App\DependencyInjectionExample\InterfaceWithSingleImplementation\Service\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class ExampleController extends AbstractController
{
    #[Route('/dependency-injection/via-interface-with-single-implementation', name: 'dependencyInjection_viaInterfaceWithSingleImplementation_xxxx')]
    public function someMethodName(LoggerInterface $logger): Response
    {
        dump($logger);

        return new Response('<body></body>');
    }
}