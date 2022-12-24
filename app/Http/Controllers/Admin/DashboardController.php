<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Logo;
use App\Models\Message;
use App\Models\Session;
use App\Models\Visitor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        $messages = Message::latest()->paginate(5);
        $contact = Contact::all()->first();
        $logo = Logo::all()->first();
        $visiteurs = Visitor::all();
        $visiteur_mois = Visitor::where('month', \Date("Y-m"))->get();
        $sessions = Session::where('month', \Date("Y-m"))->get();
        $last_visiteurs = Visitor::paginate(10);
        return view('admin.dashboard', [
            'contact' => $contact,
            'logo' => $logo,
            "visiteurs" => $visiteurs,
            "visiteur_mois" => $visiteur_mois,
            "sessions" => $sessions,
            "last_visiteurs" => $last_visiteurs,
            "messages" => $messages,
        ]);
    }

    public function updateLogo(Request $request)
    {


        $logoValue = $request->validate([
            "content" => ['required']
        ]);

        $logo = Logo::all()->first();
        $logo->update($logoValue);

        return redirect()->back()->with('success', 'Logo modifié avec succès');
    }

    public function reset()
    {
        $visiteurs = Visitor::all();
        $sessions = Session::all();

        foreach ($visiteurs as $visiteur) {
            $visiteur->delete();
        }

        foreach ($sessions as $session) {
            $session->delete();
        }

        return redirect()->back()->with('success', "Remise des compteurs à 0 réussi");
    }
}
