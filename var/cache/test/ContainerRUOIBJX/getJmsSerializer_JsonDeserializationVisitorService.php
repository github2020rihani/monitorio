<?php

namespace ContainerRUOIBJX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_JsonDeserializationVisitorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'jms_serializer.json_deserialization_visitor' shared service.
     *
     * @return \JMS\Serializer\Visitor\Factory\JsonDeserializationVisitorFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Visitor'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'DeserializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Visitor'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'JsonDeserializationVisitorFactory.php';

        $container->privates['jms_serializer.json_deserialization_visitor'] = $instance = new \JMS\Serializer\Visitor\Factory\JsonDeserializationVisitorFactory();

        $instance->setOptions(0);

        return $instance;
    }
}
