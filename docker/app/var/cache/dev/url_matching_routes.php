<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/contact' => [[['_route' => 'contact_index', '_controller' => 'App\\Controller\\ContactController::index'], null, ['GET' => 0], null, true, false, null]],
        '/contact/new' => [[['_route' => 'contact_new', '_controller' => 'App\\Controller\\ContactController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\SearchController::recherche'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/contact/([^/]++)(?'
                    .'|(*:62)'
                    .'|/edit(*:74)'
                    .'|(*:81)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        62 => [[['_route' => 'contact_show', '_controller' => 'App\\Controller\\ContactController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        74 => [[['_route' => 'contact_edit', '_controller' => 'App\\Controller\\ContactController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        81 => [
            [['_route' => 'contact_delete', '_controller' => 'App\\Controller\\ContactController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
