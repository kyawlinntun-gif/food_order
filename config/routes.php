<?php
use App\Controllers\HomeController;
return [
    'GET' => [
        '/home' => [HomeController::class, 'index']
    ]
];