<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){

//        DB::insert('insert into users (name, email, password) values (?,?,?)', [
//            'Anika', 'anika@gmail.com', 'password'
//        ]);

//        $user = new User();
//        dd($user);

//        $data = [
//            'name'=> 'ella',
//            'email' => 'ella@abc.com',
//            'password' => 'password'
//        ];
//
//        User::create($data);
//
//        $user = User::all();
//        return $user;
    }

    public function uploadAvatar(Request $request){

        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images', $filename, 'public');
            auth()->user()->update(['avatar' => $filename]);



        }
        return redirect()->back();
    }
}
