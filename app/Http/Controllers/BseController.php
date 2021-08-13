<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BseController extends Controller
{
   public function index()
   {
       $alldata = DB::table('bse_data')->get();
        return view('welcome',compact('alldata'));
   }
}
