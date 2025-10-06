<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function index(){
        $users = User::select('id');
        $clients = Client::select('id');
        $projects = Project::select('id');
        $tasks = Task::all();
        return view('dashboard',
        ['users'=>$users,
        'clients'=>$clients,
        'projects'=>$projects,
        'tasks'=>$tasks
    ]);
    }
}
