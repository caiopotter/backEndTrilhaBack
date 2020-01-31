<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function show(User $user)
    {
        return $user;
    }

    public function searchByEmail(Request $request)
    {
        return User::where('email', $request->param)->get();
    }

    public function store(Request $request)
    {
        $user = User::insert($request->all());

        return response()->json($user, 201);
    }

}
