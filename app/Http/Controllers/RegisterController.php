<?php

namespace App\Http\Controllers;

use App\actions\ImageModelSave;
use App\Http\Requests\RegisterFormRequest;
use App\services\users\SaveUserInfoService;
use App\traits\upload_image;
use App\Models\Company;
class RegisterController extends Controller
{
    use upload_image;
    public function index()
    {
        $companies=Company::query()->select('company_name')->get();
//        dd($companies[0]->company_name);
        return view('auth.register',compact('companies'));
    }
    public function save(RegisterFormRequest $request)
    {
        $userData=$request->validated();
        $file = request()->file('image');
        if ($file == null){
            $image_name = 'default.png';
        }else{
            $image_name= $this->uploadImage($file,'users');
        }
        $user=SaveUserInfoService::save($userData);
        ImageModelSave::make($user->id,'User',$image_name);
//        dd(request()->all());
        return redirect()->back()->with('success','You registered successfully!');


    }

}

