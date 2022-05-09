<?php

namespace ContainerLHUqHw3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QxQs66ZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qxQs66Z' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qxQs66Z'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Api\\Auth\\AuthController::detailProfile' => ['privates', '.service_locator.tKg7UXl', 'get_ServiceLocator_TKg7UXlService', true],
            'App\\Controller\\Api\\Auth\\AuthController::loginauth' => ['privates', '.service_locator._dIAq7u', 'get_ServiceLocator_DIAq7uService', true],
            'App\\Controller\\Api\\Auth\\AuthController::profile' => ['privates', '.service_locator.ItG2nu_', 'get_ServiceLocator_ItG2nuService', true],
            'App\\Controller\\Api\\Auth\\AuthController::register' => ['privates', '.service_locator.IhiinyR', 'get_ServiceLocator_IhiinyRService', true],
            'App\\Controller\\Api\\Full\\UserController::delete' => ['privates', '.service_locator.pco6Scs', 'get_ServiceLocator_Pco6ScsService', true],
            'App\\Controller\\Api\\Full\\UserController::edit' => ['privates', '.service_locator.pco6Scs', 'get_ServiceLocator_Pco6ScsService', true],
            'App\\Controller\\Api\\Full\\UserController::index' => ['privates', '.service_locator.2wux9HW', 'get_ServiceLocator_2wux9HWService', true],
            'App\\Controller\\Api\\Full\\UserController::new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Api\\Full\\UserController::show' => ['privates', '.service_locator.TNO_qqR', 'get_ServiceLocator_TNOQqRService', true],
            'App\\Controller\\Api\\Statistique\\ProjetController::getProjetBySecteurs' => ['privates', '.service_locator.YW19UUm', 'get_ServiceLocator_YW19UUmService', true],
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
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\Api\\Auth\\AuthController:detailProfile' => ['privates', '.service_locator.tKg7UXl', 'get_ServiceLocator_TKg7UXlService', true],
            'App\\Controller\\Api\\Auth\\AuthController:loginauth' => ['privates', '.service_locator._dIAq7u', 'get_ServiceLocator_DIAq7uService', true],
            'App\\Controller\\Api\\Auth\\AuthController:profile' => ['privates', '.service_locator.ItG2nu_', 'get_ServiceLocator_ItG2nuService', true],
            'App\\Controller\\Api\\Auth\\AuthController:register' => ['privates', '.service_locator.IhiinyR', 'get_ServiceLocator_IhiinyRService', true],
            'App\\Controller\\Api\\Full\\UserController:delete' => ['privates', '.service_locator.pco6Scs', 'get_ServiceLocator_Pco6ScsService', true],
            'App\\Controller\\Api\\Full\\UserController:edit' => ['privates', '.service_locator.pco6Scs', 'get_ServiceLocator_Pco6ScsService', true],
            'App\\Controller\\Api\\Full\\UserController:index' => ['privates', '.service_locator.2wux9HW', 'get_ServiceLocator_2wux9HWService', true],
            'App\\Controller\\Api\\Full\\UserController:new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Api\\Full\\UserController:show' => ['privates', '.service_locator.TNO_qqR', 'get_ServiceLocator_TNOQqRService', true],
            'App\\Controller\\Api\\Statistique\\ProjetController:getProjetBySecteurs' => ['privates', '.service_locator.YW19UUm', 'get_ServiceLocator_YW19UUmService', true],
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
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\Api\\Auth\\AuthController::detailProfile' => '?',
            'App\\Controller\\Api\\Auth\\AuthController::loginauth' => '?',
            'App\\Controller\\Api\\Auth\\AuthController::profile' => '?',
            'App\\Controller\\Api\\Auth\\AuthController::register' => '?',
            'App\\Controller\\Api\\Full\\UserController::delete' => '?',
            'App\\Controller\\Api\\Full\\UserController::edit' => '?',
            'App\\Controller\\Api\\Full\\UserController::index' => '?',
            'App\\Controller\\Api\\Full\\UserController::new' => '?',
            'App\\Controller\\Api\\Full\\UserController::show' => '?',
            'App\\Controller\\Api\\Statistique\\ProjetController::getProjetBySecteurs' => '?',
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
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Api\\Auth\\AuthController:detailProfile' => '?',
            'App\\Controller\\Api\\Auth\\AuthController:loginauth' => '?',
            'App\\Controller\\Api\\Auth\\AuthController:profile' => '?',
            'App\\Controller\\Api\\Auth\\AuthController:register' => '?',
            'App\\Controller\\Api\\Full\\UserController:delete' => '?',
            'App\\Controller\\Api\\Full\\UserController:edit' => '?',
            'App\\Controller\\Api\\Full\\UserController:index' => '?',
            'App\\Controller\\Api\\Full\\UserController:new' => '?',
            'App\\Controller\\Api\\Full\\UserController:show' => '?',
            'App\\Controller\\Api\\Statistique\\ProjetController:getProjetBySecteurs' => '?',
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
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
