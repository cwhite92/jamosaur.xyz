<?php

$router->get('', [
    'as'    => 'index',
    'uses'  => 'HomeController@index'
]);
