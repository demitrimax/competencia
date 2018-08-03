<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;

class PlansController extends Controller
{
    //
    public function index() {
      $plans = Plan::all();
       return view('plans.index')->with(compact('plans'));
    }

    public function show(Plan $plan)
   {
      $planSel = Plan::find($plan);
      return view('plans.show')->with(compact('planSel'));
   }
}
