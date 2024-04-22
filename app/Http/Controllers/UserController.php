<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function UserIndex(){
        $users = User::all();
        return view('usuarios.index', compact('users'));
    }

    public function SearchUsers(Request $request){
        $term = $request->name;
        $users = User::where(function ($query) use ($term) {
            $query->where('name', 'like', "%$term%")
                  ->orWhere('id', $term); // Filtra por ID
        })->get();

        return view('usuarios.index', compact('users'));
    }

    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();

        return back();
    }
}
