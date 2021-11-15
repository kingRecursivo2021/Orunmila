<?php
/**
 * Retorna una ruta absoluta para la $url proporcionada.
 *
 * @param string|null $url
 * @return string
 */
use App\Orunmila\Core\App;
use App\Orunmila\Core\Route;

function url(string $url = null) {
    //return \Orunmila\Core\App::urlTo($url);
    return App::urlTo($url);
}

/**
 * Retorna el valor asociado a la ruta.
 *
 * @param string $clave
 * @return mixed
 */

function urlParam($clave) {
    //return \Orunmila\Core\Route::getUrlParameters()[$clave];
    return Route::getUrlParameters()[$clave];
}
