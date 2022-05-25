<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/version', function () use ($router) {
    return $router->app->version();
});


$router->get('/saludo/{nombre}',function ($nombre){
    return "Hola mi nombre es " . $nombre;
});

$router->get('/edad/{edad}',function ($edad){
    if ($edad < 0){
        return "Esa edad no existe";
    } elseif ($edad < 18){
        return "Eres menor de edad " .$edad;
    } elseif ($edad >= 18 && $edad < 100){
        return "Eres mayor de edad" .$edad;
    } else {
        return "Muy poco creible";
    };

});

$router->post('/saludo',function (){
    return "Se creo un dato";
});

$router->put('/saludo',function (){
    return "Se cambio un dato";
});

$router->delete('/saludo',function (){
    return "Se elimino un dato";
});
