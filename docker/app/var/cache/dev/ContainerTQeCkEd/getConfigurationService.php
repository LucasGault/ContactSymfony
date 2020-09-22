<?php

namespace ContainerTQeCkEd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfigurationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Psy\Configuration' shared service.
     *
     * @return \Psy\Configuration
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/psy/psysh/src/Configuration.php';

        $container->privates['Psy\\Configuration'] = $instance = new \Psy\Configuration();

        $instance->setHistoryFile(($container->targetDir.''.'/psysh_history'));

        return $instance;
    }
}
