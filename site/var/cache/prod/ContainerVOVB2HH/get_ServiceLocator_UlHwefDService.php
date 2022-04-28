<?php

namespace ContainerVOVB2HH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UlHwefDService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.ulHwefD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ulHwefD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'total' => ['privates', 'App\\Service\\Total', 'getTotalService', true],
            'user' => ['privates', '.errored..service_locator.ulHwefD.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.ulHwefD": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'total' => 'App\\Service\\Total',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
