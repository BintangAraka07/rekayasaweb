<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->group(['prefix' => 'api'], function () use ($router) {
    // CRUD
    $router->get('wisata', ['uses' => 'WisataController@showAll']);
    $router->get('wisata/{id}', ['uses' => 'WisataController@showOne']);
    $router->post('wisata', ['uses' => 'WisataController@create']);
    $router->put('wisata/{id}', ['uses' => 'WisataController@update']);
    $router->delete('wisata/{id}', ['uses' => 'WisataController@delete']);

    // JWT Auth
    $router->post('login', ['uses' => 'AuthController@login']);
    $router->post('logout', ['uses' => 'AuthController@logout']);
    $router->post('refresh', ['uses' => 'AuthController@refresh']);
    $router->post('user-profile', ['uses' => 'AuthController@me']);
});
