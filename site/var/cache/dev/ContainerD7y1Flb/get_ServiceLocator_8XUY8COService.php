<?php

namespace ContainerD7y1Flb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8XUY8COService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8XUY8CO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8XUY8CO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'produitRepository' => ['privates', 'App\\Repository\\ProduitRepository', 'getProduitRepositoryService', true],
            'user' => ['privates', '.errored..service_locator.8XUY8CO.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.8XUY8CO": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'produitRepository' => 'App\\Repository\\ProduitRepository',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
