<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function save(LoginFormRequest $request)
    {
        $data=$request->validated();
        if(auth()->attempt($data)){
            $user=auth()->user();
            //before making dashboard
//            if($user->type=='admin'){
//                return redirect()->to('dashboard/users');
//            }
//            else{
////             dd($data);
//                return redirect()->to('/');
//            }
            return redirect()->to('/');
        }
        else{
            return redirect()->back()->withErrors(['error' => 'Email or password invalid']);
        }
    }

}
