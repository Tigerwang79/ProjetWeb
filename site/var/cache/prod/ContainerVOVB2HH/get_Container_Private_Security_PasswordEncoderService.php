<?php

namespace ContainerVOVB2HH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Security_PasswordEncoderService extends App_KernelProdContainer
{
    /*
     * Gets the public '.container.private.security.password_encoder' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder
     *
     * @deprecated Since symfony/security-bundle 5.3: The ".container.private.security.password_encoder" service is deprecated, use "security.user_password_hasher" instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/security-bundle', '5.3', 'The ".container.private.security.password_encoder" service is deprecated, use "security.user_password_hasher" instead.');

        return $container->services['.container.private.security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder(($container->privates['security.encoder_factory.generic'] ?? $container->load('getSecurity_EncoderFactory_GenericService')));
    }
}
