<?php

namespace ContainerHomCv9g;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRouting_Loader_ContainerService extends srcTechnical_Apps_Optime_Backend_OptimeBackendKernelTestDebugContainer
{
    /**
     * Gets the private 'routing.loader.container' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\ContainerLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 7).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 7).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 7).'/vendor/symfony/routing/Loader/ObjectLoader.php';
        include_once \dirname(__DIR__, 7).'/vendor/symfony/routing/Loader/ContainerLoader.php';
        include_once \dirname(__DIR__, 7).'/vendor/symfony/framework-bundle/Routing/LegacyRouteLoaderContainer.php';

        return $container->privates['routing.loader.container'] = new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Bundle\FrameworkBundle\Routing\LegacyRouteLoaderContainer($container, new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'kernel' => ['services', 'kernel', 'getKernelService', false],
        ], [
            'kernel' => 'Technical\\Apps\\Optime\\Backend\\OptimeBackendKernel',
        ])));
    }
}
