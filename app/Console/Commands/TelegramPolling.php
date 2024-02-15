<?php

namespace App\Console\Commands;

use App\Http\Controllers\BotController;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class TelegramPolling extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:telegram-polling';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Telegram polling description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info($this->description);

        $offset = 0;
        while (true){
            $updates = $this->getUpdates($offset);
            if(count($updates) > 0){
                foreach ($updates as $update){
                    $offset = $update['update_id'] + 1;
                    (new BotController())->handle(request()->merge($update));
                }
            }
        }
    }

    public function getUpdates($offset)
    {
        $url = "https://api.telegram.org/bot".config('services.telegram.api_key')."/getUpdates?offset=".$offset;

        $response = Http::send('GET',$url);
        return $response->json()['result'];
    }
}
