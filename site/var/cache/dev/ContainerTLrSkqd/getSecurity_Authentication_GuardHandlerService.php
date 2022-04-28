<?php

namespace ContainerTLrSkqd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_GuardHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.guard_handler' shared service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler
     *
     * @deprecated Since symfony/security-bundle 5.3: The "security.authentication.guard_handler" service is deprecated, use the new authenticator system instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/security-bundle', '5.3', 'The "security.authentication.guard_handler" service is deprecated, use the new authenticator system instead.');

        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'SessionAuthenticationStrategy.php';

        $instance = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler(($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), []);

        $instance->setSessionAuthenticationStrategy(($container->privates['security.authentication.session_strategy'] ?? ($container->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))));

        return $instance;
    }
}
