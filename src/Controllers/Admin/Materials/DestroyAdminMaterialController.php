<?php

namespace Controllers\Admin\Materials;

use Controllers\AbstractController;
use Validator;

class DestroyAdminMaterialController extends AbstractController
{
    public function __invoke(): void
    {
        $materialId = $_POST['id'];

        if (!Validator::integer($materialId)) {
            exit();
        }
        if (empty($this->database->query(
            query: 'SELECT * FROM materials WHERE id = :id',
            params: [':id' => $materialId]
        ))) {
            var_dump(2);
            exit();
        }

        $this->database->query(
            query: 'DELETE FROM materials WHERE id = :id',
            params: [':id' => $materialId],
        );

        header('Location: /admin/materials');
    }
}