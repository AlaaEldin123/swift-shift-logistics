<?php

namespace Botble\Base\Listeners;

use Botble\Base\Events\CreatedContentEvent;
use Botble\Base\Facades\BaseHelper;
use Exception;

class CreatedContentListener
{
    public function handle(CreatedContentEvent $event): void
    {
        try {
            do_action(BASE_ACTION_AFTER_CREATE_CONTENT, $event->screen, $event->request, $event->data);
        } catch (Exception $exception) {
            BaseHelper::logError($exception);
        }
    }
}
