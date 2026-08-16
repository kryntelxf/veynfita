<?php

namespace Appwrite\Platform\Modules\Veynfita\Http\Analytics;

use Utopia\Platform\Action;
use Utopia\Request;
use Utopia\Response;

class Get extends Action
{
    public static function getName(): string
    {
        return 'veynfitaAnalyticsGet';
    }

    public function __construct()
    {
        $this->desc('Get VEYNFITA analytics data')
            ->label('scope', 'public')
            ->inject('request')
            ->inject('response');
    }

    public function __invoke(Request $request, Response $response): Response
    {
        return $response->json([
            'status' => 'ok',
            'product' => 'VEYNFITA',
            'analytics' => [
                'enabled' => true,
                'version' => 'v0.1.0'
            ]
        ]);
    }
}
