<?php

namespace ContainerBQTpVIx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_RouteDescribers_FosRestService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'nelmio_api_doc.route_describers.fos_rest' shared service.
     *
     * @return \Nelmio\ApiDocBundle\RouteDescriber\FosRestDescriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'api-doc-bundle'.\DIRECTORY_SEPARATOR.'RouteDescriber'.\DIRECTORY_SEPARATOR.'RouteDescriberInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'api-doc-bundle'.\DIRECTORY_SEPARATOR.'RouteDescriber'.\DIRECTORY_SEPARATOR.'RouteDescriberTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'api-doc-bundle'.\DIRECTORY_SEPARATOR.'RouteDescriber'.\DIRECTORY_SEPARATOR.'FosRestDescriber.php';

        return $container->privates['nelmio_api_doc.route_describers.fos_rest'] = new \Nelmio\ApiDocBundle\RouteDescriber\FosRestDescriber(($container->privates['annotations.cached_reader'] ?? $container->getAnnotations_CachedReaderService()), [0 => 'json']);
    }
}
