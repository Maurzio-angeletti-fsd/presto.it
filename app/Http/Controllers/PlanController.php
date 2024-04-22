<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function show ()
    {
       $activePlan = Plan::where('slug',auth()->user()->is_subscribed)->get()->first();
      
       return view('plan.show', ['plans' => Plan::all(), 'activePlan' => $activePlan]);

    }
}
