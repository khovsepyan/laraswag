<?php

namespace Hovsepyan\LaravelSwagger\Formatters;

use Hovsepyan\LaravelSwagger\LaravelSwaggerException;

class JsonFormatter extends Formatter
{
    public function format()
    {
        if (!extension_loaded('json')) {
            throw new LaravelSwaggerException('JSON extension  error');
        }

        return json_encode($this->docs, JSON_PRETTY_PRINT);
    }
}