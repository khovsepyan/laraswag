<?php

namespace Hovsepyan\LaravelSwagger\Formatters;

use Hovsepyan\LaravelSwagger\LaravelSwaggerException;

class YamlFormatter extends Formatter
{
    public function format()
    {
        if (!extension_loaded('yaml')) {
            throw new LaravelSwaggerException('YAML extension must be loaded to use the yaml output format');
        }

        return yaml_emit($this->docs);
    }
}