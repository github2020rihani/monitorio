<?php

namespace ContainerLrySlZP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProjetControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Statistique\ProjetController' shared autowired service.
     *
     * @return \App\Controller\Statistique\ProjetController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Statistique'.\DIRECTORY_SEPARATOR.'ProjetController.php';

        $container->services['App\\Controller\\Statistique\\ProjetController'] = $instance = new \App\Controller\Statistique\ProjetController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['App\\Repository\\ProfilRepository'] ?? $container->load('getProfilRepositoryService')), ($container->privates['App\\Repository\\ProjetRepository'] ?? $container->load('getProjetRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\Statistique\\ProjetController', $container));

        return $instance;
    }
}
