<?php

namespace App\Http\Controllers;

use App\Books;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{

    //https://github.com/jwohlfert23/laravel-sync-relations
    public function register(Request $request){
        $data = $request->all();
        $prof =null;
        if($request->has('img')){
            $f_name = $request->file('img');
            $ext = Carbon::now() .'-' .$f_name->getClientOriginalName();
            $f_name->move('uploads/pics',$ext);
            $prof =  $ext;
        }
        $query = User::create([
            'name'=> $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'img' => $prof
        ]);
        return response()->json(['success']);
    }

    public function get(Request $request){
        $data = User::where('id',$request->id)->get();
        return response()->json([$data]);
    }

    public function createBook(Request $request){
        Books::create(['name' => $request->name,
                        'user_id' => $request->user_id
       ]);
       return response()->json(['done']);
    }

    public function delete(Request $request){
        $d = User::where('id',$request->id);
        return response()->json([$d]);
    }

    public function updateUser(Request $request){
        $data= User::where('id',$request->id)->update([$request->all()]);
        return $data;
    }
}
