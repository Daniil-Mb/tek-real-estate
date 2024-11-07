<?php

namespace Controllers\Admin\Feedback;

use Controllers\AbstractController;

class IndexAdminFeedbackController extends AbstractController
{
    public function __invoke(): void
    {
        $this->view('admin/feedback/index.php');
    }
}