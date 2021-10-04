<?php

namespace ContainerPCAx7AJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UIBWQx1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UIBWQx1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UIBWQx1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'requestDto' => ['privates', 'App\\Api\\User\\Dto\\ValidationExampleRequestDto', 'getValidationExampleRequestDtoService', true],
            'validationErrors' => ['privates', '.errored..service_locator.UIBWQx1.Symfony\\Component\\Validator\\ConstraintViolationListInterface', NULL, 'Cannot autowire service ".service_locator.UIBWQx1": it references interface "Symfony\\Component\\Validator\\ConstraintViolationListInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'requestDto' => 'App\\Api\\User\\Dto\\ValidationExampleRequestDto',
            'validationErrors' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ]);
    }
}
