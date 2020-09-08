<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;

class AdminHomePage extends Controller
{
    public function index(){
        $data['sitesetting'] = SiteSetting::find(1);
        return view('backend.homepage',$data);
    }
    public function save(Request $request){
        $sitesetting= SiteSetting::find(1);
        $sitesetting->site_name = $request->site_name;
        $sitesetting->logo = $request->site_logo;
        $sitesetting->save();
        return redirect()->back();
    }
}
