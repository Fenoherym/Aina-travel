<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function update(Request $request)
    {

        $data = $request->validate([
            'tel' => ['required'],
            'email' => ['email', 'required'],
            'adresse' => ['required']
        ]);

        $contact = Contact::all()->first();
        $contact->update($data);
        return redirect()->back()->with('success', 'Contact modifié avec succès');
    }
}
