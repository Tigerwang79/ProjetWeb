<?php

namespace ContainerTLrSkqd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Listener_Rememberme_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.listener.rememberme.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\RememberMeListener
     *
     * @deprecated Since symfony/security-bundle 5.3: The "security.authentication.listener.rememberme.main" service is deprecated, use the new authenticator system instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/security-bundle', '5.3', 'The "security.authentication.listener.rememberme.main" service is deprecated, use the new authenticator system instead.');

        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'SessionAuthenticationStrategy.php';

        return $container->privates['security.authentication.listener.rememberme.main'] = new \Symfony\Component\Security\Http\Firewall\RememberMeListener(($container->privates['security.untracked_token_storage'] ?? ($container->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($container->privates['security.authentication.rememberme.services.simplehash.main'] ?? $container->load('getSecurity_Authentication_Rememberme_Services_Simplehash_MainService')), ($container->privates['security.authentication.manager'] ?? $container->load('getSecurity_Authentication_ManagerService')), ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), true, ($container->privates['security.authentication.session_strategy'] ?? ($container->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))));
    }
}
