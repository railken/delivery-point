<?php

namespace Amethyst\Providers;

use Amethyst\Core\Providers\CommonServiceProvider;

class DeliveryPointServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function register()
    {
        parent::register();

        $this->app->register(\Amethyst\Providers\AddressServiceProvider::class);
        $this->app->register(\Amethyst\Providers\OpeningHourServiceProvider::class);
    }

    /**
     * @inherit
     */
    public function boot()
    {
        parent::boot();
    }
}
