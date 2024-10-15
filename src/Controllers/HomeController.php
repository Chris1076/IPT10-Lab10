<?php

namespace App\Controllers;

use App\Models\Supplier;
use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        $template = 'home';
        $data = [
            'student' => 'Christian Albert San Gabriel',
            'title' => 'IPT10 Laboratory Activity #10',
            'college' => 'College of Computer Studies',
            'university' => 'Angeles University Foundation',
            'location' => 'Angeles City, Pampanga, Philippines'
        ];
        $output = $this->render($template, $data);
        return $output;
    }
    public function welcome(){}
}