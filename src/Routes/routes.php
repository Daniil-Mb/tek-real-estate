<?php

use Controllers\Admin\Feedback\IndexAdminFeedbackController;
use Controllers\Admin\Materials\CreateAdminMaterialController;
use Controllers\Admin\Materials\DestroyAdminMaterialController;
use Controllers\Admin\Materials\IndexAdminMaterialController;
use Controllers\Admin\Materials\StoreAdminMaterialsController;
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
    $router->get('/admin/materials', IndexAdminMaterialController::class)->only('admin');
    $router->get('/admin/material/create', CreateAdminMaterialController::class)->only('admin');
    $router->post('/admin/material/create', StoreAdminMaterialsController::class)->only('admin');
    $router->delete('/admin/material/destroy', DestroyAdminMaterialController::class)->only('admin');

    $router->get('/admin/feedback', IndexAdminFeedbackController::class)->only('admin');
}