<?php
/*
 * Este archivo va a contener TODAS las rutas de
 * nuestra aplicación.
 *
 * Para esto, vamos a crear una clase Route cuya
 * función sea la de registrar y administrar las rutas.
 */
use DaVinci\Core\Route;

// Registramos la primer ruta! :D
// Route es la clase encargada del manejo de las rutas.
// Tiene un método estático "add" que permite registrar una ruta en el sistema.
// El tercer parámetro es el método del controller que debe ejecutar la ruta.
// El formato que usa es:
// "NombreController@método"
// Los Controllers están en su correspondiente carpeta en app.
Route::add('GET', '/', 'HomeController@index');

/*
 |--------------------------------------------------------------------------
 | Autenticación
 |--------------------------------------------------------------------------
 */
Route::add('GET', '/iniciar-sesion', 'AuthController@loginForm');
Route::add('POST', '/iniciar-sesion', 'AuthController@loginProcesar');
Route::add('POST', '/cerrar-sesion', 'AuthController@logout');

/*
 |--------------------------------------------------------------------------
 | Productos
 |--------------------------------------------------------------------------
 */
// Registramos una ruta para el listado de productos.
Route::add('GET', '/productos', 'ProductosController@listado');

Route::add('GET', '/productos/nuevo', 'ProductosController@nuevoForm');

// Hacemos la ruta para grabar.
// Cuando usamos URLs amigables, es frecuente que usemos la misma exacta URL que el form que
// recolecta la data, pero con el method diferente.
Route::add('POST', '/productos/nuevo', 'ProductosController@nuevoGuardar');

// Registramos una ruta para el detalle de cada producto.
// Ahora la pregunta, ¿Cómo indicamos un parámetro en la ruta que puede variar?
// Para ver el detalle del producto, las rutas van a ser algo como:
// /productos/14
// Para lograr esto, tenemos los "parámetros" para las URLs, que se indican con {nombre} (donde nombre
// es una clave arbitraria con la que luego podemos obtener el valor).
Route::add('GET', '/productos/{id}', 'ProductosController@ver');

// Hacemos el eliminar.
// Nota: Si esto fuera una API REST, entonces el verbo sería DELETE.
Route::add('POST', '/productos/{id}/eliminar', 'ProductosController@eliminar');
