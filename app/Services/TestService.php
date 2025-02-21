<?php

namespace App\Services;

class TestService
{
    public function testData($var)
    {
        $var = $var * 10;
        return $var;
    }
}
