<?php

namespace ContainerCW8ifnE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecrets_DecryptionKeyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'secrets.decryption_key' shared service.
     *
     * @return \Symfony\Component\String\LazyString
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/polyfill-php80/Resources/stubs/Stringable.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/string/LazyString.php';

        return $container->privates['secrets.decryption_key'] = \Symfony\Component\String\LazyString::fromCallable(($container->privates['container.getenv'] ?? $container->load('getContainer_GetenvService')), 'base64:default::SYMFONY_DECRYPTION_SECRET');
    }
}
