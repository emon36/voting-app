<?php

namespace App\Http\Controllers;

use App\Models\Party;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class VoteController extends Controller
{
    //
    public function store($id)
    {

        $user_id = Auth::user()->id;
        $check = Vote::where('user_id',$user_id)->first();
        if(!$check)
        {
            $vote= new Vote();
            $vote->user_id = $user_id;
            $vote->party_id = $id;
            $vote->save();
            return redirect()->back();
        }else{
            return redirect()->back()->with('error','you can not');
        }

    }

}
