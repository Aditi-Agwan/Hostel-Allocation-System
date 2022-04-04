<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view("index");
    }
 
 /* public function registration()
    {
        return
    }
*/
    public function registerUser(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'middleName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:users',
            'number' => 'required',
            'logpass' => 'required',
            'cnfpass' => 'required',
        ]);

        $user = new User();
        
        $user->first_name = $request->firstName;
        $user->second_name = $request->middleName;
        $user->last_name = $request->lastName;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->password = Hash::make($request->logpass);
        
        $res = $user->save();

        if($res)
        {
            return back()->with('success','you have registered successfully');
        }
        else
        {
            return back()->with('fail','Something wrong');
        }
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'logpass' => 'required|min:5|max:12',
        ]);

        $user = User::where('email','=',$request->email)->first();
        
        if($user)
        {
            if(Hash::check($request->logpass, $user->password))
            {
                $request->Session()->put('loginId',$user->id);
                return redirect('dashboard');
            }
            else
            {
                return back()->with('fail','Wrong password');
            }
        }
        else
        {
            return back()->with('fail','This Email is not registered ');
        }
    }

    public function dashboard()
    {
        $data = array();
        if(session::has('loginId'))
        {
            $data = User::where('id','=', Session::get("loginId"))->first();
        }
        return view('dashboard', compact('data'));
    }

    public function logout()
    {
        if(Session::has('loginId'))
        {
            Session::pull('loginId');
            return redirect('/');
        }
    }

}
