<?php

namespace ContainerRUOIBJX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosRest_Serializer_JmsService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'fos_rest.serializer.jms' shared service.
     *
     * @return \FOS\RestBundle\Serializer\JMSSerializerAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'rest-bundle'.\DIRECTORY_SEPARATOR.'Serializer'.\DIRECTORY_SEPARATOR.'Serializer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'rest-bundle'.\DIRECTORY_SEPARATOR.'Serializer'.\DIRECTORY_SEPARATOR.'JMSSerializerAdapter.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ContextFactory'.\DIRECTORY_SEPARATOR.'SerializationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ContextFactory'.\DIRECTORY_SEPARATOR.'DeserializationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer-bundle'.\DIRECTORY_SEPARATOR.'ContextFactory'.\DIRECTORY_SEPARATOR.'ConfiguredContextFactory.php';

        return $container->privates['fos_rest.serializer.jms'] = new \FOS\RestBundle\Serializer\JMSSerializerAdapter(($container->services['jms_serializer'] ?? $container->load('getJmsSerializerService')), ($container->services['jms_serializer.serialization_context_factory'] ?? ($container->services['jms_serializer.serialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())), ($container->services['jms_serializer.deserialization_context_factory'] ?? ($container->services['jms_serializer.deserialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())));
    }
}