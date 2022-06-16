<?php

namespace ContainerTUPJagG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O2WXrHYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.o2WXrHY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.o2WXrHY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'JWTManager' => ['services', 'lexik_jwt_authentication.jwt_manager', 'getLexikJwtAuthentication_JwtManagerService', true],
            'user' => ['privates', '.errored..service_locator.o2WXrHY.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.o2WXrHY": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'JWTManager' => '?',
            'user' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }
}
