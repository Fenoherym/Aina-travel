<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => ['required', 'min:3'],
            "email" => ['required', 'email'],
            "content" => ['required', 'min:10', 'max:1000']
        ]);

        Message::create($data);

        return redirect()->back()->with('success', "Message send with success");
    }
}
