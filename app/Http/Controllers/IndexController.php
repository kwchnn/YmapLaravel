<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        $map = Map::where('user_id', Auth::user()->getAuthIdentifier())->get();
        return view('index/index', ['map' => $map]);
    }
}
