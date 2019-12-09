<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api/toutesAnnonces' => [[['_route' => 'apiToutesAnnonces', '_controller' => 'App\\Controller\\APIController::apiToutesAnnonces'], null, null, null, false, false, null]],
        '/createannonce' => [[['_route' => 'createannoncepage', '_controller' => 'App\\Controller\\AnnonceController::createannoncepage'], null, null, null, false, false, null]],
        '/mesannonces' => [[['_route' => 'mesannoncespage', '_controller' => 'App\\Controller\\AnnonceController::mesannoncespage'], null, null, null, false, false, null]],
        '/annonceCreee' => [[['_route' => 'annoncecreeepage', '_controller' => 'App\\Controller\\AnnonceController::createannonce'], null, null, null, false, false, null]],
        '/annonces' => [[['_route' => 'annoncespage', '_controller' => 'App\\Controller\\AnnonceController::annoncespage'], null, null, null, false, false, null]],
        '/recherche' => [[['_route' => 'recherche', '_controller' => 'App\\Controller\\AnnonceController::recherche'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\ExempleController::index'], null, null, null, false, false, null]],
        '/monprofil' => [[['_route' => 'profilpage', '_controller' => 'App\\Controller\\ExempleController::profilpage'], null, null, null, false, false, null]],
        '/registration' => [[['_route' => 'registrationpage', '_controller' => 'App\\Controller\\ExempleController::registrationpage'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'loginpage', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/isRegistered' => [[['_route' => 'isRegisteredPage', '_controller' => 'App\\Controller\\UserController::register'], null, null, null, false, false, null]],
        '/changepassword' => [[['_route' => 'changepassword', '_controller' => 'App\\Controller\\UserController::changePassword'], null, null, null, false, false, null]],
        '/changeusername' => [[['_route' => 'changeusername', '_controller' => 'App\\Controller\\UserController::changeUsername'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/api/annonce(?'
                    .'|/([^/]++)(*:193)'
                    .'|s/([^/]++)(*:211)'
                .')'
                .'|/modifierAnnonce/([^/]++)(*:245)'
                .'|/newAnnonce/([^/]++)(*:273)'
                .'|/supprimerAnnonce/([^/]++)(*:307)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        193 => [[['_route' => 'apiAnnonce', '_controller' => 'App\\Controller\\APIController::apiAnnonce'], ['annonceId'], null, null, false, true, null]],
        211 => [[['_route' => 'apiAnnonceCategorie', '_controller' => 'App\\Controller\\APIController::apiAnnonceCategorie'], ['categorie'], null, null, false, true, null]],
        245 => [[['_route' => 'modifierAnnonce', '_controller' => 'App\\Controller\\AnnonceController::modifierannonce'], ['annonceId'], null, null, false, true, null]],
        273 => [[['_route' => 'newAnnonce', '_controller' => 'App\\Controller\\AnnonceController::newAnnonce'], ['annonceId'], null, null, false, true, null]],
        307 => [
            [['_route' => 'supprimerAnnonce', '_controller' => 'App\\Controller\\AnnonceController::supprimerAnnonce'], ['annonceId'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
