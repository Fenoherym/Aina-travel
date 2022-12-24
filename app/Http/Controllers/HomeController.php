<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function frIndex()
    {
        $contact = Contact::all()->first();

        return view('fr.welcome', [
            'contact' => $contact
        ]);
    }
}
