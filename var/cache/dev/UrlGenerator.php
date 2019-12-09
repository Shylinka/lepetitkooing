<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'apiToutesAnnonces' => [[], ['_controller' => 'App\\Controller\\APIController::apiToutesAnnonces'], [], [['text', '/api/toutesAnnonces']], [], []],
    'apiAnnonce' => [['annonceId'], ['_controller' => 'App\\Controller\\APIController::apiAnnonce'], [], [['variable', '/', '[^/]++', 'annonceId', true], ['text', '/api/annonce']], [], []],
    'apiAnnonceCategorie' => [['categorie'], ['_controller' => 'App\\Controller\\APIController::apiAnnonceCategorie'], [], [['variable', '/', '[^/]++', 'categorie', true], ['text', '/api/annonces']], [], []],
    'createannoncepage' => [[], ['_controller' => 'App\\Controller\\AnnonceController::createannoncepage'], [], [['text', '/createannonce']], [], []],
    'mesannoncespage' => [[], ['_controller' => 'App\\Controller\\AnnonceController::mesannoncespage'], [], [['text', '/mesannonces']], [], []],
    'annoncecreeepage' => [[], ['_controller' => 'App\\Controller\\AnnonceController::createannonce'], [], [['text', '/annonceCreee']], [], []],
    'annoncespage' => [[], ['_controller' => 'App\\Controller\\AnnonceController::annoncespage'], [], [['text', '/annonces']], [], []],
    'recherche' => [[], ['_controller' => 'App\\Controller\\AnnonceController::recherche'], [], [['text', '/recherche']], [], []],
    'modifierAnnonce' => [['annonceId'], ['_controller' => 'App\\Controller\\AnnonceController::modifierannonce'], [], [['variable', '/', '[^/]++', 'annonceId', true], ['text', '/modifierAnnonce']], [], []],
    'newAnnonce' => [['annonceId'], ['_controller' => 'App\\Controller\\AnnonceController::newAnnonce'], [], [['variable', '/', '[^/]++', 'annonceId', true], ['text', '/newAnnonce']], [], []],
    'supprimerAnnonce' => [['annonceId'], ['_controller' => 'App\\Controller\\AnnonceController::supprimerAnnonce'], [], [['variable', '/', '[^/]++', 'annonceId', true], ['text', '/supprimerAnnonce']], [], []],
    'homepage' => [[], ['_controller' => 'App\\Controller\\ExempleController::index'], [], [['text', '/']], [], []],
    'profilpage' => [[], ['_controller' => 'App\\Controller\\ExempleController::profilpage'], [], [['text', '/monprofil']], [], []],
    'registrationpage' => [[], ['_controller' => 'App\\Controller\\ExempleController::registrationpage'], [], [['text', '/registration']], [], []],
    'loginpage' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'isRegisteredPage' => [[], ['_controller' => 'App\\Controller\\UserController::register'], [], [['text', '/isRegistered']], [], []],
    'changepassword' => [[], ['_controller' => 'App\\Controller\\UserController::changePassword'], [], [['text', '/changepassword']], [], []],
    'changeusername' => [[], ['_controller' => 'App\\Controller\\UserController::changeUsername'], [], [['text', '/changeusername']], [], []],
    'app_logout' => [[], [], [], [['text', '/logout']], [], []],
];
