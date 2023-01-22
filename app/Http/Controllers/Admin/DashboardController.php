<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Party;
use App\Models\Vote;
use Illuminate\Http\Request;
use function Illuminate\Session\userAgent;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index() {
        $parties = Party::with('vote')->get();
        return view('admin.dashboard',['parties'=>$parties]);
    }
}
