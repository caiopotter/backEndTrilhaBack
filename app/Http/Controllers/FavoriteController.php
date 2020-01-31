<?php

namespace App\Http\Controllers;
use App\User;
use App\Movie;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{

    public function userFavorites(User $user)
    {
        return User::find($user->id)->movies()->get();
    }
    public function searchInFavorites(User $user, Request $request)
    {
        return User::find($user->id)->movies()->whereLike('title', $request->param)->get();
    }
    public function store(User $user, Request $request)
    {
        $movie = Movie::find($request->id);
        $movie->users()->attach($user->id);

        return response()->json($movie, 201);
    }

}
