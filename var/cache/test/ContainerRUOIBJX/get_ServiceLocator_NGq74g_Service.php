<?php

namespace ContainerRUOIBJX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NGq74g_Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.NGq74g.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NGq74g.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'permissionRepository' => ['privates', 'App\\Repository\\PermissionRepository', 'getPermissionRepositoryService', true],
        ], [
            'entityManager' => '?',
            'permissionRepository' => 'App\\Repository\\PermissionRepository',
        ]);
    }
}
