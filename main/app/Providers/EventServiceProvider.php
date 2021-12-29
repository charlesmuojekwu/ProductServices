<?php

namespace App\Providers;

use App\Jobs\ProductCreated;
use App\Jobs\ProductDeleted;
use App\Jobs\ProductUpdated;
use App\Jobs\TestJob;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{

    public function boot()
    {
        // \App::bindMethod(TestJob::class . '@handle', function($job){
        //     return $job->handle();
        // });

        \App::bindMethod(ProductCreated::class . '@handle', function($job){
            return $job->handle();
        });

        \App::bindMethod(ProductUpdated::class . '@handle', function($job){
            return $job->handle();
        });

        \App::bindMethod(ProductDeleted::class . '@handle', function($job){
            return $job->handle();
        });
    }
}
