<?php

namespace Controllers\Feedback;

use Controllers\AbstractController;

class IndexFeedbackController extends AbstractController
{
    public function __invoke(): void
    {
        //TODO поменяй на feedback
        $this->view('home/index.php', ['data' => 'Hello World!!!']);
    }
}