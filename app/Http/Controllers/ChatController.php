<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;
use App\Http\Controllers\Controller;

class ChatController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function sendMessage(Request $request)
    {
        // Get the user's message from the form
        $message = $request->input('message');
        $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $message,
        ]);

        return view('index', ['response' => $result['choices'][0]['text']]);

    }
}
