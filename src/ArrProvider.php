<?php

namespace w337886915\arr;

use w337886915\framework\build\Provider;

class ArrProvider extends Provider
{
    //延迟加载
    public $defer = false;

    public function boot()
    {
    }

    public function register()
    {
        $this->app->single('Arr', function () {
            return new Arr();
        });
    }
}