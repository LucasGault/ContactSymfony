<?php

namespace ContainerTQeCkEd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Translation_ExtractorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'twig.translation.extractor' shared service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Extractor/AbstractFileExtractor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Extractor/ExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Translation/TwigExtractor.php';

        return $container->privates['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor(($container->services['twig'] ?? $container->load('getTwigService')));
    }
}
