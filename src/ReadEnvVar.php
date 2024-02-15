<?php

namespace App;

use Exception;
use App\Action;

class ReadEnvVar extends Action
{
    public function __invoke($varName, $dump = false)
    {
        if(!array_key_exists($varName, $_ENV)) {
            throw new Exception('env var not found');
        }
        return $this->return($_ENV[$varName], $dump);
    }
}

