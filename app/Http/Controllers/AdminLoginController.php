<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function authenticate()
    {
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            
            return redirect('adminDashboard');
        }
    }
    public function adminDashboard()
    {
        return view('admin.index');        
    }
    
}

