<?php

namespace Bchapman\TwoFactor;

use Illuminate\Support\ServiceProvider;

class TwoFactorServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    { 
        $this->app->alias('Bchapman\TwoFactor\Contracts\TwilioAuth', 'twilio.testing');
    }
}
