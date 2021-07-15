<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
// use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['register', 'welcome']);
    }

    public function data(){
        $users = User::orderBy('id', 'desc')->paginate(100);

        $data = '<div class="card-header">Users</div><div class="card-body" style="overflow-x: scroll;">
                    <table class="table"><thead><tr><th>ID</th><th>Username</th><th>Created At</th></tr>
                        </thead>
                        <tbody>';
        $i=0;
        foreach ($users as $user) {
            $i++;
            $data .= '<tr><td>'.$i.'</td><td>'.$user->username.'</td><td>'.date('l jS \of F Y h:i:s A', strtotime($user->created_at)).'</td></tr>';
        }

        $data .= '</tbody></table></div>';
        return $data;
    }

    public function register(Request $request){
        if (Auth::guest()) {
            $faker = Faker::create();
            $user = new User;
            $user->name = $faker->name;
            $user->email = $faker->unique()->safeEmail;
            $user->email_verified_at = now();
            $user->password = bcrypt(12345678);
            $user->ip_address = \Request::ip();
            $user->remember_token = Str::random(10);
            $user->save();

            $user->username = 'user'.$user->id;
            $user->update();

            //auth()->login($user);
        }
        // if (Auth::guest()) {
        //     $user = new User;
        //     $user->name = $request->name;
        //     $user->email = $request->unique()->safeEmail;
        //     $user->email_verified_at = now();
        //     $user->password = bcrypt(12345678);
        //     $user->ip_address = \Request::ip();
        //     $user->remember_token = Str::random(10);
        //     $user->save();

        //     $user->username = 'user'.$user->id;
        //     $user->update();
        // }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome()
    {
        return view('welcome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(10);
        return view('home', compact('users'));
    }
}
