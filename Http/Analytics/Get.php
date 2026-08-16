<?php

namespace Appwrite\Platform\Modules\Veynfita\Services;

use Appwrite\Platform\Modules\Veynfita\Http\Analytics\Get as GetAnalytics;
use Utopia\Platform\Service;

class Http extends Service
{
    public function __construct()
    {
        $this->type = Service::TYPE_HTTP;

        $this->addAction(GetAnalytics::getName(), new GetAnalytics());
    }
}
