<?php

namespace ContainerLrySlZP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosRest_Serializer_FormErrorHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_rest.serializer.form_error_handler' shared service.
     *
     * @return \FOS\RestBundle\Serializer\Normalizer\FormErrorHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'SubscribingHandlerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'rest-bundle'.\DIRECTORY_SEPARATOR.'Serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'FormErrorHandler.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'FormErrorHandler.php';

        return $container->privates['fos_rest.serializer.form_error_handler'] = new \FOS\RestBundle\Serializer\Normalizer\FormErrorHandler(new \JMS\Serializer\Handler\FormErrorHandler(($container->services['translator'] ?? $container->getTranslatorService()), 'validators'));
    }
}
