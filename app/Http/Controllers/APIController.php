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
    public function insert(Request $request)
    {
        $user = new UserModel;
        $user->name = $request->input('name');
        $result = $user->save();

        if($result == 1)
        return "record is inserted to database";
    }
}
