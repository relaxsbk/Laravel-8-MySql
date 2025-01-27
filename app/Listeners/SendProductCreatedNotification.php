<?php

namespace App\Listeners;

use App\Events\ProductCreatedEvent;
use App\Notifications\ProductCreatedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;

class SendProductCreatedNotification implements ShouldQueue
{

    /**
     * Handle the event.
     *
     * @param  ProductCreatedEvent  $event
     * @return void
     */
    public function handle(ProductCreatedEvent $event)
    {
        Log::info('Сработал listener и передал данные', ['product' => $event->email, 'email' => $event->product]);
        Notification::route('mail', $event->email)->notify(new ProductCreatedNotification($event->product));
    }
}
