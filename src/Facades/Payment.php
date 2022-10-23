<?php

namespace MichaelNabil230\Payment\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MichaelNabil230\Payment\Payment
 */
class Payment extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MichaelNabil230\Payment\Payment::class;
    }
}
