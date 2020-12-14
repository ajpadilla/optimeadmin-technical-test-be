<?php

namespace ContainerHomCv9g;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRouting_Loader_PhpService extends srcTechnical_Apps_Optime_Backend_OptimeBackendKernelTestDebugContainer
{
    /**
     * Gets the private 'routing.loader.php' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\PhpFileLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 7).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 7).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 7).'/vendor/symfony/config/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 7).'/vendor/symfony/routing/Loader/PhpFileLoader.php';

        return $container->privates['routing.loader.php'] = new \Symfony\Component\Routing\Loader\PhpFileLoader(($container->privates['file_locator'] ?? $container->load('getFileLocatorService')));
    }
}