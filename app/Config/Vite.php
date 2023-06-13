<?php

namespace App\Config;

use CodeIgniter\Config\BaseConfig;

class Vite extends BaseConfig
{
    public array $entryPoints = [
        '' => 'app/Views/assets/js/main.js',
        'admin' => 'app/Views/admin/assets/js/main.js',
        'admin/datatables' => 'app/Views/admin/assets/js/datatables.js',
    ];
}