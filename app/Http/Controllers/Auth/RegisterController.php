<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //ログイン後のリダイレクト先
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nickname' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
            //"avatar" => ["file",'mimes:jpeg,png,jpg,bmb','max:2048'],
           // 'avatar' => 'required|string|max:255',
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
  
    protected function create(array $data)
    {
        
        /**$user = new User();
        $user->nickname = "nickname";
        $user->password = bcrypt("password");
        $user->avatar = "avatar";**/
        
        /**$file = $request->avatar;
        $path = $request->avatar;
        
       $file = "avatar";
        $fileName = time().'.'.$file->getClientOriginalExtension();
        $target_path = public_path('/avatar');
        $file->move($target_path,$fileName);
        
        $users->avatar = $fileName;**/
        
        return User::create([
            "nickname" => $data['nickname'],
            "password" => bcrypt($data["password"]),
           // "avatar" => $data['avatar'],
            
        ]);
    }
    
    /**public function uploadImage(Request $request)
    {
        $request->avatar->store("public/avatar");
        $file = $request->avatar;
        $path = $request->avatar->path();
        
        return 
        $users->avatar = $fileName;
    }**/
    
   
}