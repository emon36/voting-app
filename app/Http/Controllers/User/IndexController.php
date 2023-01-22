<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Party;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index() {
        $parties = Party::all();
        return view('user.dashboard',['parties'=>$parties]);
    }

}
