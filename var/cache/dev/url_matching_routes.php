<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/register' => [[['_route' => 'user.register', '_controller' => 'App\\Controller\\Api\\Auth\\AuthController::register'], null, null, null, false, false, null]],
        '/api/profile' => [[['_route' => 'user.profile', '_controller' => 'App\\Controller\\Api\\Auth\\AuthController::profile'], null, null, null, false, false, null]],
        '/api/detail' => [[['_route' => 'user.detail', '_controller' => 'App\\Controller\\Api\\Auth\\AuthController::detailProfile'], null, null, null, false, false, null]],
        '/api/auth/login' => [[['_route' => 'auth_login', '_controller' => 'App\\Controller\\Api\\Auth\\AuthController::loginauth'], null, ['POST' => 0], null, false, false, null]],
        '/api/logout' => [[['_route' => 'auth_logout', '_controller' => 'App\\Controller\\Api\\Auth\\AuthController::authLogout'], null, ['GET' => 0], null, false, false, null]],
        '/api/Users/index' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\Api\\Full\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/Users/new' => [[['_route' => 'User_new', '_controller' => 'App\\Controller\\Api\\Full\\UserController::new'], null, ['PUT' => 0], null, false, false, null]],
        '/api/projet/index' => [[['_route' => 'api_projetstatistique_projet', '_controller' => 'App\\Controller\\Api\\Statistique\\ProjetController::statistiqueProjet'], null, ['GET' => 0], null, false, false, null]],
        '/api/projet/index2' => [[['_route' => 'api_projetstatistique_nbr_project_by_loc', '_controller' => 'App\\Controller\\Api\\Statistique\\ProjetController::statistiqueProjetByLocalisation'], null, ['GET' => 0], null, false, false, null]],
        '/api/projet/index3' => [[['_route' => 'api_projetstatistique_nbr_projet_par_etat', '_controller' => 'App\\Controller\\Api\\Statistique\\ProjetController::statistiqueProjetByEtat'], null, ['GET' => 0], null, false, false, null]],
        '/api/projet/inprogress' => [[['_route' => 'api_projetcount_proj_encours', '_controller' => 'App\\Controller\\Api\\Statistique\\ProjetController::projetsInprogress'], null, ['GET' => 0], null, false, false, null]],
        '/api/projet/finish' => [[['_route' => 'api_projetcount_proj_finish', '_controller' => 'App\\Controller\\Api\\Statistique\\ProjetController::projetFinish'], null, ['GET' => 0], null, false, false, null]],
        '/api/projet/by/secteur' => [[['_route' => 'api_projetcount_projet_global', '_controller' => 'App\\Controller\\Api\\Statistique\\ProjetController::getProjetBySecteurs'], null, ['GET' => 0], null, false, false, null]],
        '/api/users/index' => [[['_route' => 'api_usersstatistique_users_by_profil', '_controller' => 'App\\Controller\\Api\\Statistique\\UserController::statistiqueUserByProfile'], null, ['GET' => 0], null, false, false, null]],
        '/api/users/statRegister' => [[['_route' => 'api_usersstatistique_users_created', '_controller' => 'App\\Controller\\Api\\Statistique\\UserController::statistiqueUserCreated'], null, ['GET' => 0], null, false, false, null]],
        '/api/users/index3' => [[['_route' => 'api_usersstatistique_users-connected', '_controller' => 'App\\Controller\\Api\\Statistique\\UserController::statistiqueUserConnected'], null, ['GET' => 0], null, false, false, null]],
        '/api/users/count' => [[['_route' => 'api_usersnbr_users_global', '_controller' => 'App\\Controller\\Api\\Statistique\\UserController::countRegister'], null, ['GET' => 0], null, false, false, null]],
        '/api/users/countStat' => [[['_route' => 'api_usersnbr_users_count', '_controller' => 'App\\Controller\\Api\\Statistique\\UserController::countUsers'], null, ['GET' => 0], null, false, false, null]],
        '/api/users/visitor' => [[['_route' => 'api_usersnbr_users_profile', '_controller' => 'App\\Controller\\Api\\Statistique\\UserController::countUserVisitor'], null, ['GET' => 0], null, false, false, null]],
        '/api/permission/index' => [[['_route' => 'permissionapp_permission_index', '_controller' => 'App\\Controller\\PermissionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/permission/new' => [[['_route' => 'permissionpermission_add', '_controller' => 'App\\Controller\\PermissionController::add'], null, ['POST' => 0], null, false, false, null]],
        '/api/profile/index' => [[['_route' => 'profilsapp_profil_index', '_controller' => 'App\\Controller\\ProfilController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/profile/new' => [[['_route' => 'profilsProfile_new', '_controller' => 'App\\Controller\\ProfilController::new'], null, ['POST' => 0], null, false, false, null]],
        '/api/doc' => [[['_route' => 'app.swagger_ui', '_controller' => 'nelmio_api_doc.controller.swagger_ui'], null, ['GET' => 0], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api/login' => [[['_route' => 'login', '_format' => 'json'], null, ['POST' => 0], null, false, false, null]],
        '/api/token/refresh' => [[['_route' => 'gesdinet_jwt_refresh_token'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/(?'
                    .'|test/(\\d+)(*:25)'
                    .'|Users/(?'
                        .'|show/([^/]++)(*:54)'
                        .'|([^/]++)/edit(*:74)'
                        .'|delete/([^/]++)(*:96)'
                    .')'
                    .'|p(?'
                        .'|ermission/(?'
                            .'|show/([^/]++)(*:134)'
                            .'|edit/([^/]++)(*:155)'
                            .'|delete/([^/]++)(*:178)'
                        .')'
                        .'|rofile/(?'
                            .'|show/([^/]++)(*:210)'
                            .'|edit/([^/]++)(*:231)'
                            .'|delete/([^/]++)(*:254)'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:296)'
                    .'|wdt/([^/]++)(*:316)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:362)'
                            .'|router(*:376)'
                            .'|exception(?'
                                .'|(*:396)'
                                .'|\\.css(*:409)'
                            .')'
                        .')'
                        .'|(*:419)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        25 => [[['_route' => 'api_test_id', '_controller' => 'App\\Controller\\ApiController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        54 => [[['_route' => 'User_show', '_controller' => 'App\\Controller\\Api\\Full\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        74 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\Api\\Full\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        96 => [[['_route' => 'users_delete', '_controller' => 'App\\Controller\\Api\\Full\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        134 => [[['_route' => 'permissionPermission_show', '_controller' => 'App\\Controller\\PermissionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        155 => [[['_route' => 'permissionPermission_edit', '_controller' => 'App\\Controller\\PermissionController::edit'], ['id'], ['PUT' => 0], null, false, true, null]],
        178 => [[['_route' => 'permissionPermission_delete', '_controller' => 'App\\Controller\\PermissionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        210 => [[['_route' => 'profilsprofil_show', '_controller' => 'App\\Controller\\ProfilController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        231 => [[['_route' => 'profilsprofil_edit', '_controller' => 'App\\Controller\\ProfilController::edit'], ['id'], ['PUT' => 0], null, false, true, null]],
        254 => [[['_route' => 'profilsprofil_delete', '_controller' => 'App\\Controller\\ProfilController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        296 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        316 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        362 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        376 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        396 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        409 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        419 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
