<?php

use Controllers\Admin\AdminHouseController;
use Controllers\Home\IndexHomeController;
use Controllers\Login\IndexLoginController;
use Controllers\Login\StoreLoginController;
use Controllers\Login\LogoutController;
use Controllers\Register\IndexRegisterController;
use Controllers\Register\StoreRegisterController;

if (isset($router)) {
    $router->get('/', IndexHomeController::class);

    $router->get('/register', IndexRegisterController::class);
    $router->post('/register', StoreRegisterController::class);
    $router->get('/login', IndexLoginController::class);
    $router->post('/login', StoreLoginController::class);
    $router->delete('/logout', LogoutController::class);

    $router->get('/admin/houses', AdminHouseController::class)->only('admin');
}
