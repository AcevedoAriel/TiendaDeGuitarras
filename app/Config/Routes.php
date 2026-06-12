<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Home::index');
//contenidos
$routes->get('inicio', 'Home::index');
$routes->get('quienessomos', 'Home::quienes_somos');
$routes->get('comercializacion', 'Home::comercializacion');
//$routes->get('informacion', 'Home::contacto');
$routes->get('terminoyusos', 'Home::terminos_y_usos');
$routes->get('registrarse', 'Home::registro');
$routes->get('iniciarsesion', 'Home::iniciar_sesion');
$routes->get('productos_cat', 'Home::productos_cat');


//consultas
$routes->get('consulta','Consulta_Controller::contacto');
$routes->post('registrar_consulta','Consulta_Controller::registrarConsulta');

$routes->get('logout', 'Usuario_controller::cerrar_sesion');
$routes->get('user_admin', 'Admin_Controller::admin',['filter' => 'admin']);

$routes->post('registrar_cliente', 'Usuario_controller::registrar_cliente');
$routes->post('verificar_login', 'Usuario_controller::login_usuario');


$routes->get('agregar_producto', 'Producto_Controller::agregar_producto',['filter' => 'admin']);
$routes->get('gestionar', 'Producto_Controller::gestionar_productos',['filter' => 'admin']);
$routes->get('lista_productos', 'Producto_Controller::listar_productos',['filter' => 'admin']);

$routes->post('registrar_producto', 'Producto_Controller::registrar_producto');
$routes->post('actualizar', 'Producto_Controller::actualizar_producto');

$routes->get('ver_consulta', 'Consulta_Controller::ver_consulta',['filter' => 'admin']);
$routes->get('ver_carrito', 'carrito_Controller::verCarrito',['filter' => 'cliente']);

$routes->get('lista_factura', 'venta_Controller::listarFactura',['filter' => 'admin']);
$routes->get('detalle_factura/(:num)', 'venta_Controller::detalleFactura/$1',['filter' => 'admin']);

$routes->post('mostrar_categoria', 'Home::filtrarPorCategoria');

$routes->post('ver_categoria', 'Home::GestionarPorCategoria');
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
