<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:20'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']); //password di enkripsi
        $validatedData['password'] = Hash::make($validatedData['password']); //password di enkripsi
        
        User::create($validatedData);
        // session()->flash('success', 'Register Success!');
        return redirect('/login')->with('success', 'Register Success! Please Login');
    }
}