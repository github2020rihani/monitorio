<?php

namespace ContainerRUOIBJX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_Command_DumpService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'nelmio_api_doc.command.dump' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Command\DumpCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'api-doc-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DumpCommand.php';

        $container->services['nelmio_api_doc.command.dump'] = $instance = new \Nelmio\ApiDocBundle\Command\DumpCommand(($container->services['nelmio_api_doc.render_docs'] ?? $container->load('getNelmioApiDoc_RenderDocsService')));

        $instance->setName('nelmio:apidoc:dump');

        return $instance;
    }
}
