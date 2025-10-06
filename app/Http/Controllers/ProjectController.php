<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with(['user','client'])->paginate(10);
        return view('projects.index',['projects'=>$projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::select(['id','name'])->get();
        $clients = Client::select(['id', 'company'])->get();
        return view('projects.create',['users'=> $users ,'clients' => $clients]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project = $request->validate([
            'title'=>['required'],
            'desc'=>['max:355'],
            'deadline'=>['required','date'],
            'status'=>['required']
        ]);
        $project['user_id']=1;
        $project['client_id']=2;
        Project::create($project);
        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $projects = Project::all();
        // $users =User::all();
        // dd($projects);
        return view('projects.edit',['project'=>$project,'projects'=>$projects]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        // if(!Gate::allows('edit-projects',$project)){
        //     abort(403);
        // }
// The action is authorized...
        $projects = $request->validate([
            'title'=>['required'],
            'desc'=>['max:355'],
            'deadline'=>['required','date'],
            'status'=>['required']
        ]);
        // $projects['user_id']=1;
        // $projects['client_id']=2;

        $project->update($projects);
        return redirect('/projects');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        Gate::authorize('delete_projects');
        $project->delete();
        return redirect('/projects');
    }
}
