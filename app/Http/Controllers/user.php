<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;




class user extends Controller
{
    public function login(Request $res)
    {

        $data=new ModelsUser();
        $email=$res['email'];
         $password=$res['password'];
        //  dd($password);
         $check=ModelsUser::get()->where('email',$email)->where('password',$password)->toArray();
         if($check)
         {
             $res->session()->put('user',$check);
             return redirect('welcome');
         }
         else
               {
             return redirect()->back();
    }
}
public function logout(Request $request)
{
    // dd(session()->all(), auth()->user());
    $ses= $request->session()->forget('user');
    // dd($ses);
    return redirect('/login');
}
 public function welcome()
 {

     return view('welcome');
 }
public function checking()
{
    return ModelsUser::all();
}

}
