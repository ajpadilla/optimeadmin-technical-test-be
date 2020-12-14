<?php

namespace ContainerHomCv9g;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTest_PrivateServicesLocatorService extends srcTechnical_Apps_Optime_Backend_OptimeBackendKernelTestDebugContainer
{
    /**
     * Gets the public 'test.private_services_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['test.private_services_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Psr\\Cache\\CacheItemPoolInterface' => ['services', 'cache.app', 'getCache_AppService', true],
            'Psr\\Container\\ContainerInterface' => ['services', 'service_container', 'getServiceContainerService', true],
            'Psr\\Container\\ContainerInterface $parameterBag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'Psr\\Log\\LoggerInterface' => ['privates', 'logger', 'getLoggerService', false],
            'Symfony\\Component\\Cache\\Adapter\\AdapterInterface' => ['services', 'cache.app', 'getCache_AppService', true],
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => ['services', 'service_container', 'getServiceContainerService', true],
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'Symfony\\Component\\Filesystem\\Filesystem' => ['services', 'filesystem', 'getFilesystemService', true],
            'Symfony\\Component\\HttpFoundation\\RequestStack' => ['services', 'request_stack', 'getRequestStackService', false],
            'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface' => ['services', 'session', 'getSessionService', true],
            'Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface' => ['privates', 'session.storage.native', 'getSession_Storage_NativeService', true],
            'Symfony\\Component\\HttpKernel\\Config\\FileLocator' => ['privates', 'file_locator', 'getFileLocatorService', true],
            'Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter' => ['privates', 'debug.file_link_formatter', 'getDebug_FileLinkFormatterService', false],
            'Symfony\\Component\\HttpKernel\\HttpKernelInterface' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'Symfony\\Component\\HttpKernel\\KernelInterface' => ['services', 'kernel', 'getKernelService', false],
            'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Routing\\RequestContext' => ['privates', 'router.request_context', 'getRouter_RequestContextService', false],
            'Symfony\\Component\\Routing\\RequestContextAwareInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Routing\\RouterInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Validator\\Validator\\ValidatorInterface' => ['services', 'validator', 'getValidatorService', true],
            'Symfony\\Contracts\\Cache\\CacheInterface' => ['services', 'cache.app', 'getCache_AppService', true],
            'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'argument_metadata_factory' => ['privates', 'argument_metadata_factory', 'getArgumentMetadataFactoryService', false],
            'argument_resolver' => ['privates', 'argument_resolver', 'getArgumentResolverService', false],
            'argument_resolver.controller_locator' => ['privates', '.service_locator.Xbsa8iG', 'get_ServiceLocator_Xbsa8iGService', true],
            'argument_resolver.default' => ['privates', 'argument_resolver.default', 'getArgumentResolver_DefaultService', true],
            'argument_resolver.request' => ['privates', 'argument_resolver.request', 'getArgumentResolver_RequestService', true],
            'argument_resolver.request_attribute' => ['privates', 'argument_resolver.request_attribute', 'getArgumentResolver_RequestAttributeService', true],
            'argument_resolver.service' => ['privates', 'argument_resolver.service', 'getArgumentResolver_ServiceService', true],
            'argument_resolver.session' => ['privates', 'argument_resolver.session', 'getArgumentResolver_SessionService', true],
            'argument_resolver.variadic' => ['privates', 'argument_resolver.variadic', 'getArgumentResolver_VariadicService', true],
            'cache.default_clearer' => ['services', 'cache.app_clearer', 'getCache_AppClearerService', true],
            'cache.default_marshaller' => ['privates', 'cache.default_marshaller', 'getCache_DefaultMarshallerService', true],
            'config.resource.self_checking_resource_checker' => ['privates', 'config.resource.self_checking_resource_checker', 'getConfig_Resource_SelfCheckingResourceCheckerService', true],
            'config_cache_factory' => ['privates', 'config_cache_factory', 'getConfigCacheFactoryService', false],
            'container.env_var_processor' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'controller_name_converter' => ['privates', '.legacy_controller_name_converter', 'get_LegacyControllerNameConverterService', false],
            'controller_resolver' => ['privates', 'controller_resolver', 'getControllerResolverService', false],
            'debug.debug_handlers_listener' => ['privates', 'debug.debug_handlers_listener', 'getDebug_DebugHandlersListenerService', false],
            'debug.file_link_formatter' => ['privates', 'debug.file_link_formatter', 'getDebug_FileLinkFormatterService', false],
            'dependency_injection.config.container_parameters_resource_checker' => ['privates', 'dependency_injection.config.container_parameters_resource_checker', 'getDependencyInjection_Config_ContainerParametersResourceCheckerService', true],
            'disallow_search_engine_index_response_listener' => ['privates', 'disallow_search_engine_index_response_listener', 'getDisallowSearchEngineIndexResponseListenerService', false],
            'error_handler.error_renderer.html' => ['privates', 'error_handler.error_renderer.html', 'getErrorHandler_ErrorRenderer_HtmlService', true],
            'error_renderer' => ['privates', 'error_handler.error_renderer.html', 'getErrorHandler_ErrorRenderer_HtmlService', true],
            'error_renderer.html' => ['privates', 'error_handler.error_renderer.html', 'getErrorHandler_ErrorRenderer_HtmlService', true],
            'exception_listener' => ['privates', 'exception_listener', 'getExceptionListenerService', false],
            'file_locator' => ['privates', 'file_locator', 'getFileLocatorService', true],
            'locale_listener' => ['privates', 'locale_listener', 'getLocaleListenerService', false],
            'logger' => ['privates', 'logger', 'getLoggerService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'resolve_controller_name_subscriber' => ['privates', '.legacy_resolve_controller_name_subscriber', 'get_LegacyResolveControllerNameSubscriberService', false],
            'response_listener' => ['privates', 'response_listener', 'getResponseListenerService', false],
            'router.cache_warmer' => ['privates', 'router.cache_warmer', 'getRouter_CacheWarmerService', true],
            'router.default' => ['services', 'router', 'getRouterService', false],
            'router.request_context' => ['privates', 'router.request_context', 'getRouter_RequestContextService', false],
            'router_listener' => ['privates', 'router_listener', 'getRouterListenerService', false],
            'routing.loader.container' => ['privates', 'routing.loader.container', 'getRouting_Loader_ContainerService', true],
            'routing.loader.directory' => ['privates', 'routing.loader.directory', 'getRouting_Loader_DirectoryService', true],
            'routing.loader.glob' => ['privates', 'routing.loader.glob', 'getRouting_Loader_GlobService', true],
            'routing.loader.php' => ['privates', 'routing.loader.php', 'getRouting_Loader_PhpService', true],
            'routing.loader.xml' => ['privates', 'routing.loader.xml', 'getRouting_Loader_XmlService', true],
            'routing.loader.yml' => ['privates', 'routing.loader.yml', 'getRouting_Loader_YmlService', true],
            'routing.resolver' => ['privates', 'routing.resolver', 'getRouting_ResolverService', true],
            'secrets.vault' => ['privates', 'secrets.vault', 'getSecrets_VaultService', true],
            'session.storage' => ['privates', 'session.storage.native', 'getSession_Storage_NativeService', true],
            'session.storage.metadata_bag' => ['privates', 'session.storage.metadata_bag', 'getSession_Storage_MetadataBagService', true],
            'session.storage.native' => ['privates', 'session.storage.native', 'getSession_Storage_NativeService', true],
            'session_listener' => ['privates', 'session_listener', 'getSessionListenerService', false],
            'streamed_response_listener' => ['privates', 'streamed_response_listener', 'getStreamedResponseListenerService', false],
            'test.session.listener' => ['privates', 'test.session.listener', 'getTest_Session_ListenerService', false],
            'validate_request_listener' => ['privates', 'validate_request_listener', 'getValidateRequestListenerService', false],
            'validator.builder' => ['privates', 'validator.builder', 'getValidator_BuilderService', true],
            'validator.email' => ['privates', 'validator.email', 'getValidator_EmailService', true],
            'validator.expression' => ['privates', 'validator.expression', 'getValidator_ExpressionService', true],
            'validator.mapping.cache_warmer' => ['privates', 'validator.mapping.cache_warmer', 'getValidator_Mapping_CacheWarmerService', true],
            'validator.mapping.class_metadata_factory' => ['services', 'validator', 'getValidatorService', true],
            'validator.not_compromised_password' => ['privates', 'validator.not_compromised_password', 'getValidator_NotCompromisedPasswordService', true],
            'validator.validator_factory' => ['privates', 'validator.validator_factory', 'getValidator_ValidatorFactoryService', true],
        ], [
            'Psr\\Cache\\CacheItemPoolInterface' => '?',
            'Psr\\Container\\ContainerInterface' => '?',
            'Psr\\Container\\ContainerInterface $parameterBag' => '?',
            'Psr\\Log\\LoggerInterface' => '?',
            'Symfony\\Component\\Cache\\Adapter\\AdapterInterface' => '?',
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => '?',
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface' => '?',
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => '?',
            'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => '?',
            'Symfony\\Component\\Filesystem\\Filesystem' => '?',
            'Symfony\\Component\\HttpFoundation\\RequestStack' => '?',
            'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface' => '?',
            'Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface' => '?',
            'Symfony\\Component\\HttpKernel\\Config\\FileLocator' => '?',
            'Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter' => '?',
            'Symfony\\Component\\HttpKernel\\HttpKernelInterface' => '?',
            'Symfony\\Component\\HttpKernel\\KernelInterface' => '?',
            'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => '?',
            'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface' => '?',
            'Symfony\\Component\\Routing\\RequestContext' => '?',
            'Symfony\\Component\\Routing\\RequestContextAwareInterface' => '?',
            'Symfony\\Component\\Routing\\RouterInterface' => '?',
            'Symfony\\Component\\Validator\\Validator\\ValidatorInterface' => '?',
            'Symfony\\Contracts\\Cache\\CacheInterface' => '?',
            'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => '?',
            'argument_metadata_factory' => '?',
            'argument_resolver' => '?',
            'argument_resolver.controller_locator' => '?',
            'argument_resolver.default' => '?',
            'argument_resolver.request' => '?',
            'argument_resolver.request_attribute' => '?',
            'argument_resolver.service' => '?',
            'argument_resolver.session' => '?',
            'argument_resolver.variadic' => '?',
            'cache.default_clearer' => '?',
            'cache.default_marshaller' => '?',
            'config.resource.self_checking_resource_checker' => '?',
            'config_cache_factory' => '?',
            'container.env_var_processor' => '?',
            'controller_name_converter' => '?',
            'controller_resolver' => '?',
            'debug.debug_handlers_listener' => '?',
            'debug.file_link_formatter' => '?',
            'dependency_injection.config.container_parameters_resource_checker' => '?',
            'disallow_search_engine_index_response_listener' => '?',
            'error_handler.error_renderer.html' => '?',
            'error_renderer' => '?',
            'error_renderer.html' => '?',
            'exception_listener' => '?',
            'file_locator' => '?',
            'locale_listener' => '?',
            'logger' => '?',
            'parameter_bag' => '?',
            'resolve_controller_name_subscriber' => '?',
            'response_listener' => '?',
            'router.cache_warmer' => '?',
            'router.default' => '?',
            'router.request_context' => '?',
            'router_listener' => '?',
            'routing.loader.container' => '?',
            'routing.loader.directory' => '?',
            'routing.loader.glob' => '?',
            'routing.loader.php' => '?',
            'routing.loader.xml' => '?',
            'routing.loader.yml' => '?',
            'routing.resolver' => '?',
            'secrets.vault' => '?',
            'session.storage' => '?',
            'session.storage.metadata_bag' => '?',
            'session.storage.native' => '?',
            'session_listener' => '?',
            'streamed_response_listener' => '?',
            'test.session.listener' => '?',
            'validate_request_listener' => '?',
            'validator.builder' => '?',
            'validator.email' => '?',
            'validator.expression' => '?',
            'validator.mapping.cache_warmer' => '?',
            'validator.mapping.class_metadata_factory' => '?',
            'validator.not_compromised_password' => '?',
            'validator.validator_factory' => '?',
        ]);
    }
}
