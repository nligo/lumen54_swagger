<?php
/**
 * 用户路由
 */
$router->group(['prefix' => 'user'], function($router){
    $router->get('/list','UserController@index');
    $router->post('/create','UserController@create');
    $router->get('/update','UserController@update');
    $router->get('/delete','UserController@delete');
});