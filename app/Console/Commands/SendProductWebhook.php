<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SendProductWebhook extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:webhook';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send product webhook';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $webhook = config('products.webhook');


        $product = Product::query()->available()->orderByDesc('id')->first();

        $response = Http::withoutVerifying()->post($webhook,  [
            'product_id' => $product->id,
            'product_article' => $product->article,
            'product_name' => $product->name,
            'product_data' => $product->data,
            'created_at' => $product->created_at,
        ]);

        Log::info('Отправился вебхук', ['response' => $response]);
    }
}
