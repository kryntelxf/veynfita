<?php

namespace Appwrite\Platform\Modules\Veynfita;

use Appwrite\Platform\Modules\Veynfita\Services\Http;
use Utopia\Platform\Module;

class Module extends Module
{
    public function __construct()
    {
        $this->addService('http', new Http());
    }
}
