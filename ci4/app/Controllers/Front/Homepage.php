<?php

namespace App\Controllers\front;

use App\Controllers\BaseController;


class Homepage extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
}
