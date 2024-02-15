<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BotController extends Controller
{
    public function handle(Request $request)
    {
        $input = $request->all();
        print_r($input);
        $message = $input['message'];
        $chat_id = $message['chat']['id'];
        $from_id = $message['from']['id'];

        if(isset($from_id)){
            $user = User::find($from_id);

            if(count($user) == 1){

            }
        }

        else{
            $this->call('sendMessage',[
                "chat_id"   => $chat_id,
                "text"      => "Buyruqni bajarishdagi xatolik"
            ]);
        }
    }


    private function call($method,$params=[])
    {
        $url = "https://api.telegram.org/bot".config('services.telegram.api_key')."/".$method;

        $response = Http::post($url,$params);

        return $response->json();
    }
}
