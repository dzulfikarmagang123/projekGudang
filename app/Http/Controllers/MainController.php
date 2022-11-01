<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function index()
    {
        return view('layout.main');
    }

    public function getMenu(Request $request)
	{
        $userData = Session::get('userdata');
        $userId = $userData->user_id;

        $menus = DB::table('v_role_menus')->where([
            ['user_id', $userId],
            ['menu_active', 1]
        ])->get();
        
        // dd($menus); 
		// dd($request->session());
	}
}
