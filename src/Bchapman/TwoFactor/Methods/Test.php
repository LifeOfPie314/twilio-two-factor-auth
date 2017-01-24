<?php

namespace Bchapman\TwoFactor\Methods;

use Bchapman\TwoFactor\Contracts\TwilioAuth;

class Test implements TwilioAuth
{
    public function test()
    {
        return 'testing';
    }
}
