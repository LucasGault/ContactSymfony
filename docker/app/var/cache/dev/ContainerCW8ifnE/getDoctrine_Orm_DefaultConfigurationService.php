<?php

namespace ContainerCW8ifnE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_DefaultConfigurationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.orm.default_configuration' shared service.
     *
     * @return \Doctrine\ORM\Configuration
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Configuration.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Mapping/EntityListenerServiceResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Mapping/ContainerEntityListenerResolver.php';

        $container->privates['doctrine.orm.default_configuration'] = $instance = new \Doctrine\ORM\Configuration();

        $instance->setEntityNamespaces(['App' => 'App\\Entity']);
        $instance->setMetadataCacheImpl(($container->privates['doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata'] ?? $container->load('getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_MetadataService')));
        $instance->setQueryCacheImpl(($container->privates['doctrine.orm.cache.provider.cache.doctrine.orm.default.query'] ?? $container->load('getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_QueryService')));
        $instance->setResultCacheImpl(($container->privates['doctrine.orm.cache.provider.cache.doctrine.orm.default.result'] ?? $container->load('getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_ResultService')));
        $instance->setMetadataDriverImpl(($container->privates['doctrine.orm.default_metadata_driver'] ?? $container->load('getDoctrine_Orm_DefaultMetadataDriverService')));
        $instance->setProxyDir(($container->targetDir.''.'/doctrine/orm/Proxies'));
        $instance->setProxyNamespace('Proxies');
        $instance->setAutoGenerateProxyClasses(true);
        $instance->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $instance->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $instance->setNamingStrategy(($container->privates['doctrine.orm.naming_strategy.underscore_number_aware'] ?? ($container->privates['doctrine.orm.naming_strategy.underscore_number_aware'] = new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy(0, true))));
        $instance->setQuoteStrategy(($container->privates['doctrine.orm.quote_strategy.default'] ?? ($container->privates['doctrine.orm.quote_strategy.default'] = new \Doctrine\ORM\Mapping\DefaultQuoteStrategy())));
        $instance->setEntityListenerResolver(($container->privates['doctrine.orm.default_entity_listener_resolver'] ?? ($container->privates['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($container))));
        $instance->setRepositoryFactory(($container->privates['doctrine.orm.container_repository_factory'] ?? $container->load('getDoctrine_Orm_ContainerRepositoryFactoryService')));

        return $instance;
    }
}
