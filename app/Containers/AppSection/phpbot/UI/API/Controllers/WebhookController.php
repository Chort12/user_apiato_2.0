<?php

namespace App\Containers\AppSection\Phpbot\UI\API\Controllers;

use App\Ship\Parents\Controllers\ApiController;
use App\Ship\Parents\Requests\Request;
use Telegram\Bot\BotsManager;

class WebhookController extends ApiController
{
    protected BotsManager $botsManager;
    public function __construct(BotsManager $botsManager){
        $this->botsManager = $botsManager;
    }

    public function __invoke(Request $request)
    {
        $this->botsManager->bot()->commandsHandler(true);
        return response(null, 200);
    }
}
