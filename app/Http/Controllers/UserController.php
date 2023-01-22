<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return User::all()->makeVisible('created_at');
    }
    public function show(User $user) {
        return $user->makeVisible('email_verified_at');
    }
}
