<?php

class Operations
{
    // function with strict typing (available in PHP 7 and above)
    public static function sum(int $arg1, int $arg2): int
    {
        return $arg1 + $arg2;
    }
}