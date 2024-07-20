<?php

namespace App\Actions;

use App\Http\Requests\WebhookRequest;
use Lorisleiva\Actions\Concerns\AsAction;

abstract class BaseAction
{
    use AsAction;

    public function __get($name)
    {
        return $this->request->get($name);
    }
}
