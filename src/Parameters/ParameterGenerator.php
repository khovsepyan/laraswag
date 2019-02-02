<?php

namespace Hovsepyan\LaravelSwagger\Parameters;

interface ParameterGenerator
{
    public function getParameters();

    public function getParamLocation();
}