<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Gate;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view('clients.index',['clients'=>$clients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attrs = $request->validate([
            'name'=>'required',
            'company'=>['required','max:255'],
            'VAT'=>['required','integer'],
            'address'=>['required','max:255'],
        ]);
        Client::create($attrs);
        return redirect('/clients');
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
    public function edit(Client $client)
    {
        $companies = Client::select('company')->get();
        return view('clients.edit',['client'=>$client,'companies' => $companies]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
         $newClient = $request->validate(
            [
                'name'=>['required','max:255'],
                'company'=>'required',
                'VAT'=>['required','integer'],
                'address'=>['required'],
            ]
            );
            $client->update($newClient);
            return redirect('/clients');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        Gate::authorize('delete_clients');
        $client->delete();
        return redirect('/clients');
    }
}
