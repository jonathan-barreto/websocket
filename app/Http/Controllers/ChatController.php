<?php

namespace App\Http\Controllers;

use App\Events\ChatMessage;
use Illuminate\Broadcasting\BroadcastEvent;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    //
    public function sendMessage()
    {
        // $message = $request->get('message');

        event(new ChatMessage('message'));

        return response()->json([
            'success' => true,
            'message' => 'Mensagem enviada com sucesso!',
        ]);
    }
}
