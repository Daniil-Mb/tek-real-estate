<?php

namespace Controllers\Login;

use Controllers\AbstractController;
use Validator;

class StoreLoginController extends AbstractController
{
    public function __invoke(): void
    {
        $data = new LoginData(
            email: $_POST['email'] ?? '',
            password: $_POST['password'] ?? ''
        );

        $errors = new LoginErrorData();

        if (!Validator::email($data->email)) {
            $errors->email = 'Введите корректный email';
        }

        if (!Validator::string($data->password, 2, 50)) {
            $errors->password = 'Введите корректный пароль';
        }

        if (!empty(array_filter(get_object_vars($errors)))) {
            $this->view('login/index.php', [
                'data' => $data,
                'errors' => $errors,
            ]);

            exit();
        }

        $user = $this->database->query(
            query: "SELECT * FROM users WHERE email = :email and password = :password",
            params: [':email' => $data->email, ':password' => $data->password]
        );

        if (empty($user)) {
            $errors->password = 'Неверный email или пароль';
            $this->view('login/index.php', [
                'data' => $data,
                'errors' => $errors,
            ]);

            exit();
        }

        $_SESSION['user'] = $user[0];

        header('Location: /');
    }
}