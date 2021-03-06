<?php

namespace ContainerHomCv9g;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRouting_Loader_XmlService extends srcTechnical_Apps_Optime_Backend_OptimeBackendKernelTestDebugContainer
{
    /**
     * Gets the private 'routing.loader.xml' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\XmlFileLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 7).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 7).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 7).'/vendor/symfony/config/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 7).'/vendor/symfony/routing/Loader/Configurator/Traits/HostTrait.php';
        include_once \dirname(__DIR__, 7).'/vendor/symfony/routing/Loader/Configurator/Traits/LocalizedRouteTrait.php';
        include_once \dirname(__DIR__, 7).'/vendor/symfony/routing/Loader/Configurator/Traits/PrefixTrait.php';
        include_once \dirname(__DIR__, 7).'/vendor/symfony/routing/Loader/XmlFileLoader.php';

        return $container->privates['routing.loader.xml'] = new \Symfony\Component\Routing\Loader\XmlFileLoader(($container->privates['file_locator'] ?? $container->load('getFileLocatorService')));
    }
}
