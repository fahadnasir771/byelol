<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emoji;
use App\User;
use Auth;

class EmojiController extends Controller
{
    public function store(){
    	$emoji = new Emoji;
    	$emoji->status = 1;
        $emoji->user_id = !empty(Auth::id()) ? Auth::id() : NULL;
    	$emoji->save();
    }

    public function user_logout(){
        if (Auth::check()) {
            User::where('id', Auth::id())->where('email', '!=', 'admin@gmail.com')->delete();
            Auth::logout();
        }
    }

    public function get_emoji(){
        $execute_time = date('Y-m-d H:i:s', strtotime('-1 seconds', strtotime(date('Y-m-d H:i:s'))));
        User::where('logout', 0)->where('email', '!=', 'admin@gmail.com')->delete();
        $time = date("Y-m-d H:i:s", strtotime ("-1 hour", strtotime (date("Y-m-d H:i:s"))));
        $users = User::select('ip_address', 'logout', 'created_at')->where('created_at', '>=', $time)->where('logout', 1)->distinct('ip_address')->count();
    	$emoji = Emoji::whereDate('created_at', date('Y-m-d'))->count();
        $my_id = !empty(Auth::id()) ? Auth::id() : NULL;
        $my_emoji = Emoji::where('user_id', $my_id)->count();
        Emoji::where('created_at', '<=', $execute_time)->orWhere('created_at', '<=', $execute_time)->delete();
        return response()->json([
            'my_emoji' => $my_emoji,
            'emoji' => $emoji,
            'online_users' => $users
        ]);
    }
}
