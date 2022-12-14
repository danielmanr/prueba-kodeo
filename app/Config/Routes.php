<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
$routes->get('crear', 'UsuarioController::crear');
$routes->post('guardar', 'UsuarioController::guardar');
$routes->get('listaUsuarios', 'UsuarioController::index');
$routes->get('borrarUsuario/(:num)', 'UsuarioController::borrar/$1');
$routes->get('editarUsuario/(:num)', 'UsuarioController::editar/$1');
$routes->post('actualizarUsuario', 'UsuarioController::actualizar');
$routes->get('home', 'HomeController::inicio');
$routes->get('inicioSesion', 'LoginController::login');
$routes->post('loguear', 'LoginController::loguear');
$routes->get('salir', 'LoginController::salir');


$routes->get('obtenerTiempo', 'TiempoController::obtenerTiempo');

$routes->get('registrarNoticia', 'NoticiaController::crearNoticia');
$routes->post('guardarNoticia', 'NoticiaController::guardarNoticia');
$routes->get('verNoticias', 'NoticiaController::index');
$routes->get('editarNoticia/(:num)', 'NoticiaController::editarNoticia/$1');
$routes->post('actualizarNoticia', 'NoticiaController::actualizarNoticia');
$routes->get('borrarNoticia/(:num)', 'NoticiaController::borrarNoticia/$1');
$routes->get('verCategoria', 'NoticiasCategoriaController::index');

$routes->get('crearCategoria', 'NoticiasCategoriaController::crearCategoria');
$routes->post('guardarCategoria', 'NoticiasCategoriaController::guardarCategoria');
$routes->get('listaCategorias', 'NoticiasCategoriaController::index');
$routes->get('borrarCategoria/(:num)', 'NoticiasCategoriaController::borrarCategoria/$1');
$routes->get('editarCategotia/(:num)', 'NoticiasCategoriaController::editarCategoria/$1');


$routes->get('editarCategoria/(:num)', 'NoticiasCategoriaController::editarCategoria/$1');
$routes->post('actualizarCategorias', 'NoticiasCategoriaController::actualizarCategoria');
$routes->get('salir', 'HomeController::inicio');

$routes->get('crearSin', 'HomeController::registrar');

$routes->get('noticia', 'NoticiaController::noticia');
$routes->get('noticia/detalleNoticia/(:any)', 'NoticiaController::detalleNoticia/$1/$2');
$routes->get('noticias/categoria', 'NoticiaController::verCategoriaNoticia');
$routes->get('noticias/categoria/(:any)', 'NoticiaController::listadoCategoria/$1');
