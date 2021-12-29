https://github.com/barryvdh/laravel-ide-helper

composer require --dev barryvdh/laravel-ide-helper

php artisan ide:generate

php artisan ide:models 

## RABBITMQ PHP PACKAGE

https://github.com/vyuldashev/laravel-queue-rabbitmq      
composer require vladimir-yuldashev/laravel-queue-rabbitmq      



## JOBS AND EVENTS
messaging broker - RabbitMq


-App\Jobs -- Consumer
php artisan make:job ProductCreated 

-App\Providers\EventServiceProvider boot()
     \App::bindMethod(ProductCreated::class . '@handle', function($job){
            return $job->handle();
        });

-listens to events with eventlistener on RabbitMq
php artisan queue:work or php artisan queue:listen


## Set queue command
added the listen event in the docker-compose yaml file