<?php
/**
 * 用户路由
 */
$router->group(['prefix' => 'news'], function($router){
    $router->get('/list','NewsController@index');
    $router->post('/create','NewsController@create');
    $router->get('/update','NewsController@update');
    $router->get('/delete','NewsController@delete');
});