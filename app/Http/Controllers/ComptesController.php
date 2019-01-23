<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComptesController extends Controller
{
    public function show() {
        
        $user = Auth::user();
        
        $money = strlen($user->name);
        
        return view('comptes')->with('money', $money);
    }
}
