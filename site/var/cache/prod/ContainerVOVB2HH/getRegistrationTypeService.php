<?php

namespace ContainerVOVB2HH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegistrationTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\RegistrationType' shared autowired service.
     *
     * @return \App\Form\RegistrationType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\RegistrationType'] = new \App\Form\RegistrationType();
    }
}
