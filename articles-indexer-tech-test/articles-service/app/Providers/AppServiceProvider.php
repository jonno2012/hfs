<?php

namespace App\Providers;

use App\Services\ArticleEventService;
use App\Services\RabbitMQEventPublisher;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(RabbitMQEventPublisher::class, function ($app) {
            return new RabbitMQEventPublisher(
                host: env('RABBITMQ_HOST', 'localhost'),
                port: (int) env('RABBITMQ_PORT', 5672),
                user: env('RABBITMQ_USER', 'guest'),
                password: env('RABBITMQ_PASSWORD', 'guest'),
                vhost: env('RABBITMQ_VHOST', '/'),
                exchange: env('RABBITMQ_EXCHANGE', 'articles.events'),
            );
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
