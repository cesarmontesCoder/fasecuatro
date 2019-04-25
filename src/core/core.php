<?php

namespace core;

use core\views;

class core
{
    static function entryPoint()
    {
        return views::add('login/index');
    }
}

core::entryPoint();