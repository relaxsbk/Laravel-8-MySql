<?php

namespace App\Jobs;

use App\Events\ProductCreatedEvent;
use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class CreatedProductToEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $product;
    protected $email;

    public function __construct($product, $email)
    {
        $this->email = $email;
        $this->product = $product;
    }


    public function handle()
    {
//        Log::info('Сработал job и передал данные', ['product' => $this->product, 'email' => $this->email]);
        event(new ProductCreatedEvent($this->product, $this->email));
    }
}
