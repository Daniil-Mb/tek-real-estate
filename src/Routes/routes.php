<?php

use Controllers\Admin\Feedback\IndexAdminFeedbackController;
use Controllers\Admin\House\CreateAdminHouseController;
use Controllers\Admin\House\IndexAdminHouseController;
use Controllers\Admin\House\StoreAdminHouseController;
use Controllers\Admin\IndexAdminController;
use Controllers\Home\IndexHomeController;
use Controllers\Login\IndexLoginController;
use Controllers\Login\LogoutController;
use Controllers\Login\StoreLoginController;
use Controllers\Register\IndexRegisterController;
use Controllers\Register\StoreRegisterController;

if (isset($router)) {
    $router->get('/', IndexHomeController::class);

    $router->get('/register', IndexRegisterController::class);
    $router->post('/register', StoreRegisterController::class);
    $router->get('/login', IndexLoginController::class);
    $router->post('/login', StoreLoginController::class);
    $router->delete('/logout', LogoutController::class);

    $router->get('/admin', IndexAdminController::class)->only('admin');

    $router->get('/admin/houses', IndexAdminHouseController::class)->only('admin');
    $router->get('/admin/house/create', CreateAdminHouseController::class)->only('admin');
    $router->post('/admin/house/create', StoreAdminHouseController::class)->only('admin');
    $router->get('/admin/feedback', IndexAdminFeedbackController::class)->only('admin');
}