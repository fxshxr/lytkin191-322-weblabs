<?php

namespace ContainerVl6r6xI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTestControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Api\Controller\TestController' shared autowired service.
     *
     * @return \App\Api\Controller\TestController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Api'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'TestController.php';

        return $container->services['App\\Api\\Controller\\TestController'] = new \App\Api\Controller\TestController();
    }
}
