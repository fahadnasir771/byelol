<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emoji;
use App\User;
use Auth;
use DB;

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
        $execute_time = date('Y-m-d H:i:s', strtotime(strtotime(date('Y-m-d H:i:s'))));
        User::where('logout', 0)->where('email', '!=', 'admin@gmail.com')->delete();
        $time = date("Y-m-d H:i:s", strtotime (strtotime (date("Y-m-d H:i:s"))));
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
    
    public function completed_time(Request $request){
        $data = DB::table('compete_game')->where('username', $request->username)->get();
        if($data->count()){
            $old = null;
            if(!is_null($data->pluck('compete_time')[0])){
                $time = explode(':',$data->pluck('compete_time')[0]);
                $old = $time[0] * 3600 + $time[1] * 60 + $time[2];    
            }
            $time = explode(':',$request->completed_time);
            $current = $time[0] * 3600 + $time[1] * 60 + $time[2];
            if($current > $old){
                DB::table('compete_game')->where('username', $request->username)->update(array('compete_time' =>$request->completed_time, 'compete_date' => date('Y-m-d H:i:s') ));
            }
            
            return json_encode('Inserted');
        }
        $values = array('username' => $request->username, 'compete_time' =>$request->completed_time, 'compete_date' => date('Y-m-d H:i:s') );
        DB::table('compete_game')->insert($values);
        return json_encode('Inserted');
    }
    
    public function get_top_3(){
        // $data['top1'] = DB::select( DB::raw("select distinct(compete_time) from compete_game order by compete_time DESC LIMIT 1") );
        // $data['top2'] = DB::select( DB::raw("select distinct(compete_time) from compete_game order by compete_time DESC LIMIT 2") );
        $data['top3'] = DB::select( DB::raw("select distinct(compete_time),username from compete_game order by compete_time DESC LIMIT 3") );
        
        return $data;
    }
}
