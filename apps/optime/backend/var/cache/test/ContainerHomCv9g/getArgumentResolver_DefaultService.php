<?php

namespace ContainerHomCv9g;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_DefaultService extends srcTechnical_Apps_Optime_Backend_OptimeBackendKernelTestDebugContainer
{
    /**
     * Gets the private 'argument_resolver.default' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 7).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 7).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/DefaultValueResolver.php';

        return $container->privates['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver();
    }
}
