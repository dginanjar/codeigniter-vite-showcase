<?php

namespace App\Controllers\Admin;

class Dashboard extends AdminController
{
    public function index()
    {
        return $this->display('dashboard');
    }
}