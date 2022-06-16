<?php

namespace ContainerJs1lyvM;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGesdinet_JwtrefreshtokenService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'gesdinet.jwtrefreshtoken' shared service.
     *
     * @return \Gesdinet\JWTRefreshTokenBundle\Service\RefreshToken
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'gesdinet'.\DIRECTORY_SEPARATOR.'jwt-refresh-token-bundle'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'RefreshToken.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'EntryPoint'.\DIRECTORY_SEPARATOR.'AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-guard'.\DIRECTORY_SEPARATOR.'AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-guard'.\DIRECTORY_SEPARATOR.'AbstractGuardAuthenticator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'gesdinet'.\DIRECTORY_SEPARATOR.'jwt-refresh-token-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Authenticator'.\DIRECTORY_SEPARATOR.'RefreshTokenAuthenticator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'gesdinet'.\DIRECTORY_SEPARATOR.'jwt-refresh-token-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'RefreshTokenProvider.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'InMemoryUserChecker.php';

        $a = ($container->services['gesdinet.jwtrefreshtoken.refresh_token_manager'] ?? $container->load('getGesdinet_Jwtrefreshtoken_RefreshTokenManagerService'));

        $b = new \Gesdinet\JWTRefreshTokenBundle\Security\Provider\RefreshTokenProvider($a);
        $b->setCustomUserProvider(($container->privates['security.user.provider.concrete.app_user_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppUserProviderService')));

        return $container->services['gesdinet.jwtrefreshtoken'] = new \Gesdinet\JWTRefreshTokenBundle\Service\RefreshToken(new \Gesdinet\JWTRefreshTokenBundle\Security\Authenticator\RefreshTokenAuthenticator(($container->privates['security.user_checker'] ?? ($container->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\InMemoryUserChecker())), 'refresh_token'), $b, ($container->privates['lexik_jwt_authentication.handler.authentication_success'] ?? $container->load('getLexikJwtAuthentication_Handler_AuthenticationSuccessService')), ($container->privates['lexik_jwt_authentication.handler.authentication_failure'] ?? $container->load('getLexikJwtAuthentication_Handler_AuthenticationFailureService')), $a, 3600, 'api', false, ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}