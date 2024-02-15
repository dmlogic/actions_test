<?php

namespace App;

class Action
{
    public function __construct(public $dump = true)
    {
    }

    public function __invoke($arg)
    {
        return $this->return($arg);
    }

    public function return($value)
    {
        if($this->dump) {
            dump($value);
        }
        return $value;
    }

    public static function execute( $args, $dump = false)
    {
        return (new static($dump))(...func_get_args());
    }
}

