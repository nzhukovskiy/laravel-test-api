<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserControllerResources extends Controller
{
    public function index() {
        return new UserCollection(User::all());
    }
    public function show(User $user) {
        return new UserResource($user);
    }
}
