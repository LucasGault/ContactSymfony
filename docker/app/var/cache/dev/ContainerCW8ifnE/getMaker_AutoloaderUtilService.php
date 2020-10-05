<?php

namespace ContainerCW8ifnE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_AutoloaderUtilService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.autoloader_util' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Util\AutoloaderUtil
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Util/AutoloaderUtil.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Util/ComposerAutoloaderFinder.php';

        return $container->privates['maker.autoloader_util'] = new \Symfony\Bundle\MakerBundle\Util\AutoloaderUtil(($container->privates['maker.autoloader_finder'] ?? ($container->privates['maker.autoloader_finder'] = new \Symfony\Bundle\MakerBundle\Util\ComposerAutoloaderFinder('App'))));
    }
}
