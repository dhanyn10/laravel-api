<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;

class APIController extends Controller
{
    public function index()
    {
        $user = UserModel::all();
        return $user;
    }
}
