<?php

namespace ContainerBQTpVIx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__1yrbn9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..1yrbn9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..1yrbn9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ApiController::getPlacesAction' => ['privates', '.service_locator.pSlx4t1', 'get_ServiceLocator_PSlx4t1Service', true],
            'App\\Controller\\PermissionController::add' => ['privates', '.service_locator.NGq74g.', 'get_ServiceLocator_NGq74g_Service', true],
            'App\\Controller\\PermissionController::delete' => ['privates', '.service_locator.yrvO_m9', 'get_ServiceLocator_YrvOM9Service', true],
            'App\\Controller\\PermissionController::edit' => ['privates', '.service_locator.yrvO_m9', 'get_ServiceLocator_YrvOM9Service', true],
            'App\\Controller\\PermissionController::index' => ['privates', '.service_locator.0ytnOoJ', 'get_ServiceLocator_0ytnOoJService', true],
            'App\\Controller\\PermissionController::show' => ['privates', '.service_locator.uBRCptm', 'get_ServiceLocator_UBRCptmService', true],
            'App\\Controller\\ProfilController::delete' => ['privates', '.service_locator.1UrvX8b', 'get_ServiceLocator_1UrvX8bService', true],
            'App\\Controller\\ProfilController::edit' => ['privates', '.service_locator.1UrvX8b', 'get_ServiceLocator_1UrvX8bService', true],
            'App\\Controller\\ProfilController::index' => ['privates', '.service_locator.SDxDLzt', 'get_ServiceLocator_SDxDLztService', true],
            'App\\Controller\\ProfilController::new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\ProfilController::show' => ['privates', '.service_locator.SDxDLzt', 'get_ServiceLocator_SDxDLztService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.vjFAvyX', 'get_ServiceLocator_VjFAvyXService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.vjFAvyX', 'get_ServiceLocator_VjFAvyXService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\UserController::new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.cktIvAG', 'get_ServiceLocator_CktIvAGService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\ApiController:getPlacesAction' => ['privates', '.service_locator.pSlx4t1', 'get_ServiceLocator_PSlx4t1Service', true],
            'App\\Controller\\PermissionController:add' => ['privates', '.service_locator.NGq74g.', 'get_ServiceLocator_NGq74g_Service', true],
            'App\\Controller\\PermissionController:delete' => ['privates', '.service_locator.yrvO_m9', 'get_ServiceLocator_YrvOM9Service', true],
            'App\\Controller\\PermissionController:edit' => ['privates', '.service_locator.yrvO_m9', 'get_ServiceLocator_YrvOM9Service', true],
            'App\\Controller\\PermissionController:index' => ['privates', '.service_locator.0ytnOoJ', 'get_ServiceLocator_0ytnOoJService', true],
            'App\\Controller\\PermissionController:show' => ['privates', '.service_locator.uBRCptm', 'get_ServiceLocator_UBRCptmService', true],
            'App\\Controller\\ProfilController:delete' => ['privates', '.service_locator.1UrvX8b', 'get_ServiceLocator_1UrvX8bService', true],
            'App\\Controller\\ProfilController:edit' => ['privates', '.service_locator.1UrvX8b', 'get_ServiceLocator_1UrvX8bService', true],
            'App\\Controller\\ProfilController:index' => ['privates', '.service_locator.SDxDLzt', 'get_ServiceLocator_SDxDLztService', true],
            'App\\Controller\\ProfilController:new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\ProfilController:show' => ['privates', '.service_locator.SDxDLzt', 'get_ServiceLocator_SDxDLztService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.vjFAvyX', 'get_ServiceLocator_VjFAvyXService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.vjFAvyX', 'get_ServiceLocator_VjFAvyXService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\UserController:new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.cktIvAG', 'get_ServiceLocator_CktIvAGService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\ApiController::getPlacesAction' => '?',
            'App\\Controller\\PermissionController::add' => '?',
            'App\\Controller\\PermissionController::delete' => '?',
            'App\\Controller\\PermissionController::edit' => '?',
            'App\\Controller\\PermissionController::index' => '?',
            'App\\Controller\\PermissionController::show' => '?',
            'App\\Controller\\ProfilController::delete' => '?',
            'App\\Controller\\ProfilController::edit' => '?',
            'App\\Controller\\ProfilController::index' => '?',
            'App\\Controller\\ProfilController::new' => '?',
            'App\\Controller\\ProfilController::show' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::new' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ApiController:getPlacesAction' => '?',
            'App\\Controller\\PermissionController:add' => '?',
            'App\\Controller\\PermissionController:delete' => '?',
            'App\\Controller\\PermissionController:edit' => '?',
            'App\\Controller\\PermissionController:index' => '?',
            'App\\Controller\\PermissionController:show' => '?',
            'App\\Controller\\ProfilController:delete' => '?',
            'App\\Controller\\ProfilController:edit' => '?',
            'App\\Controller\\ProfilController:index' => '?',
            'App\\Controller\\ProfilController:new' => '?',
            'App\\Controller\\ProfilController:show' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:new' => '?',
            'App\\Controller\\UserController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
