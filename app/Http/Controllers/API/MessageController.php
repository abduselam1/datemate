<?php

namespace App\Http\Controllers\API;

use App\Models\Chat\Message;
use Illuminate\Http\Request;
use App\Models\Chat\Conversation;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function countMessages()
    {

        $conversations = Conversation::where('user_one', auth()->id())->orWhere('user_two', auth()->id())->pluck('id');
        $unreadMessage = Message::whereIn('conversation_id', $conversations)->where('user_id', auth()->id())->where('status', false)->count();

        return new JsonResponse($unreadMessage, 200);
    }
}
