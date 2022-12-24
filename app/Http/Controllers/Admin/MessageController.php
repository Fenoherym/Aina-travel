<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function destroy($id)
    {
        Message::find($id)->delete();

        return redirect()->back()->with('success', 'Messa supprimé');
    }
}
