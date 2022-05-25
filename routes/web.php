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

$router->get('/hola', function () use ($router) {
    return $router->app->version();
});


$router->get('/saludo/{nombre}', function($nombre){
    return 'hola mi nombre es ' .$nombre;
});

$router->post('/saludo', function(){
    return 'Hola, estoy creando un saludo';
});

$router->put('/saludo', function(){
    return 'Modifique el hola';
});
$router->get('/calcular/{edad}',function($edad) {
    if($edad > 0 && $edad < 18) {
        return 'eres menor de edad';
    } elseif ($edad >= 18 && $edad<=100){
        return 'ERES MAYOR DE EDAD';
    } else {
        return 'Edad erronea';
    }
});


$router->delete('/saludo', function(){
    return 'adios';
});
