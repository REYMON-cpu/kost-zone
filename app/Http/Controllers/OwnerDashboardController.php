<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Kost;

class OwnerDashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $kosts = Kost::where('user_id', $user->id)->get();

        return view('owner.dashboard', compact('kosts'));
    }
}
