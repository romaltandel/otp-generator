<?php

namespace RomalTandel\Otp;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RomalTandel\Otp\Otp
 */
class Otp extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'otp-generator';
    }
}
