<?php

namespace Controllers\Register;

use Controllers\AbstractController;
use Validator;

class StoreRegisterController extends AbstractController
{
    public function __invoke(): void
    {
        //TODO нужно будет создать удобный класс Request который будет собирать и валидировать данные
        $data = new RegisterUserData(
            name: $_POST['name'],
            email: $_POST['email'],
            password: $_POST['password'],
        );
        $errors = new RegisterUserErrorsData();

        if (!Validator::string($data->name, 2, 50)) {
            $errors->name = 'Имя должно быть от 2х до 50 симоволов';
        }

        if (!Validator::string($data->email, 2, 50)) {
            $errors->email = 'Email должно быть от 2х до 50 симоволов';
        }

        if (!Validator::email($data->email)) {
            $errors->email = 'Введите корректный email';
        }

        if (!Validator::emailIsUnique($data->email, $this->database)) {
            $errors->email = 'Такой email уже есть';
        }

        if (!Validator::string($data->password, 8, 50)) {
            $errors->password = 'Email должно быть от 8х до 50 симоволов';
        }

        if (!empty(array_filter(get_object_vars($errors)))) {
            $this->view('register/index.php', [
                'data' => $data,
                'errors' => $errors,
            ]);

            exit();
        }

        $this->database->query(
            query: 'INSERT INTO users (name, email, password) VALUES (:name, :email, :password)',
            params: [':name' => $data->name, ':email' => $data->email, ':password' => $data->password],
        );

        //end request
        $_SESSION['user'] = [
            'email' => $data->email
        ];

        header('Location: /');
        exit();
    }
}