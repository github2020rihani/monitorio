<?php

namespace ContainerRUOIBJX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosRest_ViewHandlerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'fos_rest.view_handler' shared service.
     *
     * @return \FOS\RestBundle\View\ViewHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'rest-bundle'.\DIRECTORY_SEPARATOR.'View'.\DIRECTORY_SEPARATOR.'ViewHandlerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'rest-bundle'.\DIRECTORY_SEPARATOR.'View'.\DIRECTORY_SEPARATOR.'ConfigurableViewHandlerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'rest-bundle'.\DIRECTORY_SEPARATOR.'View'.\DIRECTORY_SEPARATOR.'ViewHandler.php';

        return $container->services['fos_rest.view_handler'] = \FOS\RestBundle\View\ViewHandler::create(($container->services['router'] ?? $container->getRouterService()), ($container->privates['fos_rest.serializer.jms'] ?? $container->load('getFosRest_Serializer_JmsService')), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ['json' => false, 'xml' => false], 400, 204, false, ['serializeNullStrategy' => false]);
    }
}
