<?php

namespace App\Question;

use Illuminate\Support\ServiceProvider;

class QuestionServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'product');
        $this->loadMigrationsFrom(__DIR__ . '/migrations');

        // Register commands, listeners, migrations, etc...
    }
}
