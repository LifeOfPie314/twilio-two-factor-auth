<?php

namespace Bchapman\TwoFactor\Facades;

use Illuminate\Support\Facades\Facade;

class TwilioAuth extends Facade
{
    /**
   * @return string
   */
  protected static function getFacadeAccessor()
  {
      return 'twilio.testing';
  }
}
