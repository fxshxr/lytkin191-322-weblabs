<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/v1/test' => [[['_route' => 'app_api_test_index', '_controller' => 'App\\Api\\Controller\\TestController::index'], null, ['GET' => 0], null, true, false, null]],
        '/api/v1/test/users' => [[['_route' => 'app_api_test_users', '_controller' => 'App\\Api\\Controller\\TestController::users'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_core_default_index', '_controller' => 'App\\Core\\Controller\\DefaultController::indexAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
