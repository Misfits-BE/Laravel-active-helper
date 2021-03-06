<?php

use Illuminate\Foundation\Testing\TestCase as LaravelTestCase;

/**
 * Class TestCase
 */
class TestCase extends LaravelTestCase
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__ . '/../vendor/laravel/laravel/bootstrap/app.php';
        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();
        $app->register(ActivismeBE\ActiveMenu\ActiveMenuServiceProvider::class);

        return $app;
    }
}