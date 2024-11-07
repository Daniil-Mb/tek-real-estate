<?php

namespace Controllers\Admin\House;

use Controllers\AbstractController;
use Validator;

class DestroyAdminHouseController extends AbstractController
{
    public function __invoke(): void
    {
        $houseId = $_POST['id'];

        if (!Validator::integer($houseId)) {
            exit();
        }
        if (empty($this->database->query(
            query: 'SELECT * FROM houses WHERE id = :id',
            params: [':id' => $houseId]
        ))) {
            var_dump(2);
            exit();
        }

        $this->database->query(
            query: 'DELETE FROM houses WHERE id = :id',
            params: [':id' => $houseId],
        );

        header('Location: /admin/houses');
    }
}