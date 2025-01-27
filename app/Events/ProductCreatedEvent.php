<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ProductCreatedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $product;
    public $email;

    public function __construct($product, $email)
    {

        $this->product = $product;
        $this->email = $email;
        Log::info('Сработал event и передал данные');
    }


}
