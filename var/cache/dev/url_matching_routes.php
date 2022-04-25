<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/permission/index' => [[['_route' => 'permissionapp_permission_index', '_controller' => 'App\\Controller\\PermissionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/permission/new' => [[['_route' => 'permissionpermission_add', '_controller' => 'App\\Controller\\PermissionController::add'], null, ['POST' => 0], null, false, false, null]],
        '/api/profile/index' => [[['_route' => 'profilsapp_profil_index', '_controller' => 'App\\Controller\\ProfilController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/profile/new' => [[['_route' => 'profilsProfile_new', '_controller' => 'App\\Controller\\ProfilController::new'], null, ['POST' => 0], null, false, false, null]],
        '/api/projet/index' => [[['_route' => 'api_projetstatistique_projet', '_controller' => 'App\\Controller\\Statistique\\ProjetController::statistiqueProjet'], null, ['GET' => 0], null, false, false, null]],
        '/api/projet/index2' => [[['_route' => 'api_projetapp_statistique_projet_statistiqueprojetbylocalisation', '_controller' => 'App\\Controller\\Statistique\\ProjetController::statistiqueProjetByLocalisation'], null, ['GET' => 0], null, false, false, null]],
        '/api/projet/index3' => [[['_route' => 'api_projetapp_statistique_projet_statistiqueprojetbyetat', '_controller' => 'App\\Controller\\Statistique\\ProjetController::statistiqueProjetByEtat'], null, ['GET' => 0], null, false, false, null]],
        '/api/projet/inprogress' => [[['_route' => 'api_projetapp_statistique_projet_projetsinprogress', '_controller' => 'App\\Controller\\Statistique\\ProjetController::projetsInprogress'], null, ['GET' => 0], null, false, false, null]],
        '/api/projet/finish' => [[['_route' => 'api_projetapp_statistique_projet_projetfinish', '_controller' => 'App\\Controller\\Statistique\\ProjetController::projetFinish'], null, ['GET' => 0], null, false, false, null]],
        '/api/projet/index4' => [[['_route' => 'api_projetapp_statistique_projet_countprojet', '_controller' => 'App\\Controller\\Statistique\\ProjetController::countProjet'], null, ['GET' => 0], null, false, false, null]],
        '/api/users/index' => [[['_route' => 'api_usersstatistique_users_by_profil', '_controller' => 'App\\Controller\\Statistique\\UserController::statistiqueUserByProfile'], null, ['GET' => 0], null, false, false, null]],
        '/api/users/index2' => [[['_route' => 'api_usersstatistique users created', '_controller' => 'App\\Controller\\Statistique\\UserController::statistiqueUserCreated'], null, ['GET' => 0], null, false, false, null]],
        '/api/users/index3' => [[['_route' => 'api_usersstatistique users connected by day', '_controller' => 'App\\Controller\\Statistique\\UserController::statistiqueUserConnected'], null, ['GET' => 0], null, false, false, null]],
        '/api/users/index4' => [[['_route' => 'api_usersNombre des enregistrement des utilisateurs', '_controller' => 'App\\Controller\\Statistique\\UserController::countRegister'], null, ['GET' => 0], null, false, false, null]],
        '/api/Users/index' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/Users/new' => [[['_route' => 'User_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['PUT' => 0], null, false, false, null]],
        '/api/doc' => [[['_route' => 'app.swagger_ui', '_controller' => 'nelmio_api_doc.controller.swagger_ui'], null, ['GET' => 0], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/(?'
                    .'|test/(\\d+)(*:25)'
                    .'|p(?'
                        .'|ermission/(?'
                            .'|show/([^/]++)(*:62)'
                            .'|edit/([^/]++)(*:82)'
                            .'|delete/([^/]++)(*:104)'
                        .')'
                        .'|rofile/(?'
                            .'|show/([^/]++)(*:136)'
                            .'|edit/([^/]++)(*:157)'
                            .'|delete/([^/]++)(*:180)'
                        .')'
                    .')'
                    .'|Users/(?'
                        .'|show/([^/]++)(*:212)'
                        .'|([^/]++)/edit(*:233)'
                        .'|delete/([^/]++)(*:256)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:297)'
                    .'|wdt/([^/]++)(*:317)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:363)'
                            .'|router(*:377)'
                            .'|exception(?'
                                .'|(*:397)'
                                .'|\\.css(*:410)'
                            .')'
                        .')'
                        .'|(*:420)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        25 => [[['_route' => 'api_test_id', '_controller' => 'App\\Controller\\ApiController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        62 => [[['_route' => 'permissionPermission_show', '_controller' => 'App\\Controller\\PermissionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        82 => [[['_route' => 'permissionPermission_edit', '_controller' => 'App\\Controller\\PermissionController::edit'], ['id'], ['PUT' => 0], null, false, true, null]],
        104 => [[['_route' => 'permissionPermission_delete', '_controller' => 'App\\Controller\\PermissionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        136 => [[['_route' => 'profilsprofil_show', '_controller' => 'App\\Controller\\ProfilController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        157 => [[['_route' => 'profilsprofil_edit', '_controller' => 'App\\Controller\\ProfilController::edit'], ['id'], ['PUT' => 0], null, false, true, null]],
        180 => [[['_route' => 'profilsprofil_delete', '_controller' => 'App\\Controller\\ProfilController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        212 => [[['_route' => 'User_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        233 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        256 => [[['_route' => 'users_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        297 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        317 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        363 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        377 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        397 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        410 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        420 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
