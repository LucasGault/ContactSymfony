<?php

namespace ContainerKPjBFYB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnnotations_DummyRegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'annotations.dummy_registry' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationRegistry.php';

        $container->privates['annotations.dummy_registry'] = $instance = new \Doctrine\Common\Annotations\AnnotationRegistry();

        $instance->registerUniqueLoader('class_exists');

        return $instance;
    }
}
