<?php

namespace ContainerTQeCkEd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwigService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Cache/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Cache/FilesystemCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/ExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/AbstractExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/CoreExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/EscaperExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/OptimizerExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/StagingExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/ExtensionSet.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Template.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/TemplateWrapper.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Environment.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/YamlExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/ExpressionExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/HttpKernelExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/FormExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/DebugExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Twig/DoctrineExtension.php';

        $container->services['twig'] = $instance = new \Twig\Environment(($container->privates['twig.loader.native_filesystem'] ?? $container->load('getTwig_Loader_NativeFilesystemService')), ['autoescape' => 'name', 'cache' => ($container->targetDir.''.'/twig'), 'charset' => 'UTF-8', 'debug' => true, 'strict_variables' => true]);

        $instance->addExtension(($container->privates['twig.extension.profiler'] ?? $container->load('getTwig_Extension_ProfilerService')));
        $instance->addExtension(($container->privates['twig.extension.trans'] ?? $container->load('getTwig_Extension_TransService')));
        $instance->addExtension(($container->privates['twig.extension.assets'] ?? $container->load('getTwig_Extension_AssetsService')));
        $instance->addExtension(($container->privates['twig.extension.code'] ?? $container->load('getTwig_Extension_CodeService')));
        $instance->addExtension(($container->privates['twig.extension.routing'] ?? $container->load('getTwig_Extension_RoutingService')));
        $instance->addExtension(($container->privates['twig.extension.yaml'] ?? ($container->privates['twig.extension.yaml'] = new \Symfony\Bridge\Twig\Extension\YamlExtension())));
        $instance->addExtension(($container->privates['twig.extension.debug.stopwatch'] ?? $container->load('getTwig_Extension_Debug_StopwatchService')));
        $instance->addExtension(($container->privates['twig.extension.expression'] ?? ($container->privates['twig.extension.expression'] = new \Symfony\Bridge\Twig\Extension\ExpressionExtension())));
        $instance->addExtension(($container->privates['twig.extension.httpkernel'] ?? ($container->privates['twig.extension.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelExtension())));
        $instance->addExtension(($container->privates['twig.extension.httpfoundation'] ?? $container->load('getTwig_Extension_HttpfoundationService')));
        $instance->addExtension(($container->privates['twig.extension.form'] ?? ($container->privates['twig.extension.form'] = new \Symfony\Bridge\Twig\Extension\FormExtension())));
        $instance->addExtension(($container->privates['twig.extension.debug'] ?? ($container->privates['twig.extension.debug'] = new \Twig\Extension\DebugExtension())));
        $instance->addExtension(($container->privates['doctrine.twig.doctrine_extension'] ?? ($container->privates['doctrine.twig.doctrine_extension'] = new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension())));
        $instance->addExtension(($container->privates['webpack_encore.twig_entry_files_extension'] ?? $container->load('getWebpackEncore_TwigEntryFilesExtensionService')));
        $instance->addExtension(($container->privates['knp_paginator.twig.extension.pagination'] ?? $container->load('getKnpPaginator_Twig_Extension_PaginationService')));
        $instance->addGlobal('app', ($container->privates['twig.app_variable'] ?? $container->load('getTwig_AppVariableService')));
        $instance->addRuntimeLoader(($container->privates['twig.runtime_loader'] ?? $container->load('getTwig_RuntimeLoaderService')));
        ($container->privates['twig.configurator.environment'] ?? $container->load('getTwig_Configurator_EnvironmentService'))->configure($instance);

        return $instance;
    }
}
