<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use BeyondCode\ServerTiming\Facades\ServerTiming;

class UserController extends Controller
{
    public function index()
    {
        $task = 'Running User query';
        ServerTiming::start($task);
        $users = User::all();
        ServerTiming::stop($task);
    }
}
