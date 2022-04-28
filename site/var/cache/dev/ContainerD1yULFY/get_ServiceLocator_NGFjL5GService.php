<?php

namespace ContainerD1yULFY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NGFjL5GService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NGFjL5G' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NGFjL5G'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'hashedPassword' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
        ], [
            'hashedPassword' => '?',
        ]);
    }
}
