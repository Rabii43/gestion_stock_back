<?php

namespace ContainerJs1lyvM;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUsersSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Event\UsersSubscriber' shared autowired service.
     *
     * @return \App\Event\UsersSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Event'.\DIRECTORY_SEPARATOR.'UsersSubscriber.php';

        return $container->privates['App\\Event\\UsersSubscriber'] = new \App\Event\UsersSubscriber(($container->privates['App\\Service\\HeaderAuthGenerator'] ?? $container->load('getHeaderAuthGeneratorService')), ($container->privates['http_client'] ?? $container->load('getHttpClientService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
