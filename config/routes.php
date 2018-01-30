<?php

/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */
Router::defaultRouteClass(DashedRoute::class);
Router::scope('/', function (RouteBuilder $routes) {

    $routes->connect('/', ['controller' => 'Homes', 'action' => 'index']);
    $routes->connect('/login', ['controller' => 'Users', 'action' => 'login']);
    $routes->connect('/signup', ['controller' => 'Users', 'action' => 'signup']);
    $routes->connect('/error', ['controller' => 'CmsPages', 'action' => 'errorPage']);
    $routes->connect('/myprofile', ['controller' => 'Users', 'action' => 'myprofile']);
    $routes->connect('/logout', ['controller' => 'Users', 'action' => 'logout']);    
    

    /*     * @This below routes are using for ajax* */
    //$routes->connect('/get_closing_form', ['controller' => 'Closings', 'action' => 'getClosingForm']);
    /*     * **** CMS PAGES ******* */
//    $routes->connect('/about_us', ['controller' => 'CmsPages', 'action' => 'aboutUs']);
//    $routes->connect('/error', ['controller' => 'CmsPages', 'action' => 'errorPage']);
//    $routes->connect('/faq', ['controller' => 'CmsPages', 'action' => 'faq']);
//    $routes->connect('/terms_and_conditions', ['controller' => 'CmsPages', 'action' => 'TermAndConditions']);
//    $routes->connect('/privacy_policy', ['controller' => 'CmsPages', 'action' => 'privacyPolicy']);
//    $routes->connect('/contact_us', ['controller' => 'CmsPages', 'action' => 'contactUs']);
    /*     * **** CMS PAGES ******* */
    $routes->fallbacks(DashedRoute::class);
});
Router::prefix('admin', function ($routes) {
    $routes->connect('/', ['controller' => 'Index', 'action' => 'index']);
    $routes->connect('/dashboard', ['controller' => 'Users', 'action' => 'dashboard']);
    $routes->connect('/login', ['controller' => 'Users', 'action' => 'login']);
//    $routes->connect('/success', ['controller' => 'Users', 'action' => 'success']);
//    $routes->connect('/my-profile', ['controller' => 'Users', 'action' => 'myProfile']);
//    $routes->connect('/reset_password', ['controller' => 'Users', 'action' => 'resetPassword']);
    $routes->fallbacks(DashedRoute::class);
});
/**
 * Load all plugin routes.  See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */
Plugin::routes();
