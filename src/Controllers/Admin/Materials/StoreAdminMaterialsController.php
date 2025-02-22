<?php

namespace Controllers\Admin\Materials;

use Controllers\AbstractController;
use Validator;

class StoreAdminMaterialsController extends AbstractController
{
    public function __invoke(): void
    {
        $data = new StoreMaterialData(
            name: $_POST['name'] ?? '',
            description: $_POST['description'] ?? '',
            price: $_POST['price'],
            image: $_POST['image'] ?? '',
        );
        $errors = new ErrorStoreMaterialData();

        if (!Validator::string($data->name, 2, 50)) {
            $errors->name = 'Имя должно быть от 2х до 50 симоволов';
        }

        if (!Validator::string($data->description, 2, 255)) {
            $errors->description = 'Описание должно быть от 2х до 255 симоволов';
        }

        if (!Validator::string($data->image)) {
            $errors->image = 'Вставьте ссылку на картинку';
        }

        if (!empty(array_filter(get_object_vars($errors)))) {
            $this->view('admin/material/create.php', [
                'data' => $data,
                'errors' => $errors,
            ]);

            exit();
        }

        $this->database->query(
            query: 'INSERT INTO materials (name, description, price, image) VALUES (:name, :description, :price, :image)',
            params: [
                ':name' => $data->name,
                ':description' => $data->description,
                ':price' => $data->price,
                ':image' => $data->image
            ],
        );

        header('Location: /admin/materials');
    }
}