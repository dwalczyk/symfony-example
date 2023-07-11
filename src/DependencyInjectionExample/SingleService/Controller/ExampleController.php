<?php

namespace App\DependencyInjectionExample\SingleService\Controller;

use App\DependencyInjectionExample\SingleService\Service\FileSystemLogger;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class ExampleController extends AbstractController
{
    #[Route('/dependency-injection/base-usage', name: 'dependencyInjection_baseUsage_blablabla')]
    public function someMethodName(FileSystemLogger $logger): Response
    {
        dump($logger);

        return new Response('<body></body>');
    }
}