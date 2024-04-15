<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        // Retrieve the authenticated user
        $user = Auth::user();

        return response()->json(['user' => $user], 200);
        
        return redirect()->route('user');
    }
}
