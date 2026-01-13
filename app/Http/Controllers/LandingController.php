<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kost;

class LandingController extends Controller
{
    public function index(Request $request)
    {
        $kosts = Kost::paginate(8);
        return view('landing.index', compact('kosts'));
    }
    public function detail($id)
{
    $kost = Kost::with('images','user')->findOrFail($id);
    return view('kost.detail', compact('kost'));
}

}
