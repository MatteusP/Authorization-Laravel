<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return Inertia::render('Users/index', [
            'can' => [
                'create_user' => Auth::user()->can('users.create'),
            ],
            'users' => User::all()->map(function ($user){
                return [
                    'first_name'=> $user->first_name,
                    'email'=> $user->email,
                    'can'=> [
                        'edit_user' => Auth::user()->can('user.edit', $user),
                    ]
                ];
            }),
        ]);
    }
}

