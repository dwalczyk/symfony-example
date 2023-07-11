<?php

namespace App\DependencyInjectionExample\InterfaceWithMultipleImplementation\Controller;

use App\DependencyInjectionExample\InterfaceWithMultipleImplementation\Service\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class ExampleController extends AbstractController
{
    #[Route('/dependency-injection/via-interface-with-multiple-implementation', name: 'dependencyInjection_viaInterfaceWithMultipleImplementation_xxxx')]
    public function someMethodName(LoggerInterface $logger): Response
    {
        dump($logger);

        return new Response('<body></body>');
    }
}