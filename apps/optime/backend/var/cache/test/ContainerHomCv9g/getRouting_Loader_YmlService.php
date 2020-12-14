<?php

namespace ContainerHomCv9g;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRouting_Loader_YmlService extends srcTechnical_Apps_Optime_Backend_OptimeBackendKernelTestDebugContainer
{
    /**
     * Gets the private 'routing.loader.yml' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\YamlFileLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 7).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 7).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 7).'/vendor/symfony/config/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 7).'/vendor/symfony/routing/Loader/Configurator/Traits/HostTrait.php';
        include_once \dirname(__DIR__, 7).'/vendor/symfony/routing/Loader/Configurator/Traits/LocalizedRouteTrait.php';
        include_once \dirname(__DIR__, 7).'/vendor/symfony/routing/Loader/Configurator/Traits/PrefixTrait.php';
        include_once \dirname(__DIR__, 7).'/vendor/symfony/routing/Loader/YamlFileLoader.php';

        return $container->privates['routing.loader.yml'] = new \Symfony\Component\Routing\Loader\YamlFileLoader(($container->privates['file_locator'] ?? $container->load('getFileLocatorService')));
    }
}