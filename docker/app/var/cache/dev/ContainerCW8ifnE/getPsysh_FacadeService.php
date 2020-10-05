<?php

namespace ContainerCW8ifnE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPsysh_FacadeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'psysh.facade' shared service.
     *
     * @return \Fidry\PsyshBundle\PsyshFacade
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/psysh-bundle/src/PsyshFacade.php';

        $container->services['psysh.facade'] = $instance = new \Fidry\PsyshBundle\PsyshFacade();

        $instance->setContainer(($container->services['test.service_container'] ?? ($container->services['test.service_container'] = new \Symfony\Bundle\FrameworkBundle\Test\TestContainer(($container->services['kernel'] ?? $container->get('kernel', 1)), 'test.private_services_locator'))));

        return $instance;
    }
}
