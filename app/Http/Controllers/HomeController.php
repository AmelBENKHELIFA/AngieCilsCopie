<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function redirectOrShowDashboard()
    {
        if (auth()->check()) {
            return view('dashboard'); // Affiche le tableau de bord si l'utilisateur est connecté
        } else {
            return redirect()->route('login'); // Redirige vers la page de connexion sinon
        }
    }
}
