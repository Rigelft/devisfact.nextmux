<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function edit()
    {
        return view('profil.edit');
    }
}
