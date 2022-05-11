<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/about', 'Page::about');
$routes->get('/privacy-policy', 'Page::privacy');
$routes->get('/disclaimer', 'Page::disclaimer');
$routes->get('/contact', 'Page::contact');
$routes->get('/tutorial', 'Page::tutorial');
$routes->get('/tutorial/html', 'Page::tutorialhtml');
$routes->get('/tutorial/css', 'Page::tutorialcss');
$routes->get('/tutorial/javascript', 'Page::tutorialjs');
$routes->get('/tutorial/blogger', 'Page::tutorialblogger');
$routes->get('/category', 'Page::category');
$routes->get('/category/html', 'Page::categoryhtml');
$routes->get('/category/css', 'Page::categorycss');
$routes->get('/category/javascript', 'Page::categoryjs');
$routes->get('/category/text-editor', 'Page::categoryte');
$routes->get('/category/blogger', 'Page::categoryblogger');

/**
 * --------------------------------------------------------------------
 * Article Route Definitions
 * --------------------------------------------------------------------
 */

$routes->get('/pengenalan-html', 'Article::pengenalanhtml');
$routes->get('/pengenalan-css', 'Article::pengenalancss');
$routes->get('/pengenalan-javascript', 'Article::pengenalanjs');
$routes->get('/text-editor-linux', 'Article::texteditorlinux');
$routes->get('/cara-membuat-blog-gratis', 'Article::bloggratis');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
