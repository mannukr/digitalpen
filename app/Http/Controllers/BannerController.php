<?php

namespace App\Http\Controllers;

use App\TopBanner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $user= TopBanner::firstOrFail();
        return view('frontend.index')->with('user',$user);
    }
}
