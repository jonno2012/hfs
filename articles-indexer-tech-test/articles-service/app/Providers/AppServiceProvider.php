<?php

namespace App\Providers;

use App\Messaging\NullPublisher;
use App\Messaging\RabbitMqPublisher;
use App\Messaging\RabbitMqPublisherInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(RabbitMqPublisherInterface::class, function ($app) {
            // Use NullPublisher in testing environment
            if ($app->environment('testing')) {
                return new NullPublisher();
            }

            return new RabbitMqPublisher(
                host: env('RABBITMQ_HOST', 'localhost'),
                port: (int) env('RABBITMQ_PORT', 5672),
                user: env('RABBITMQ_USER', 'guest'),
                password: env('RABBITMQ_PASSWORD', 'guest'),
                vhost: env('RABBITMQ_VHOST', '/'),
                exchange: env('RABBITMQ_EXCHANGE', 'articles.events'),
            );
        });

        // Also bind concrete class for backwards compatibility
        $this->app->singleton(RabbitMqPublisher::class, function ($app) {
            if ($app->environment('testing')) {
                return new NullPublisher();
            }

            return new RabbitMqPublisher(
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
