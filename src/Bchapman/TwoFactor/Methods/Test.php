<?php

namespace Bchapman\TwoFactor\Methods;

use Bchapman\TwoFactor\Contracts\TwilioAuth;

class Test implements TwilioAuth
{
    public static function test()
    {
        dd('testing');
    }
}
