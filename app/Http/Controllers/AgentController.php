<?php

namespace App\Http\Controllers;
 


use Illuminate\Http\Request;
use Input;
use App\Agent;
use App\Region;
use App\User;
use App\Role;
use App\Http\Requests\AgentRequest;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = User::with('regions')->whereHas(
    'roles', function($q){
        $q->where('name', 'agent');

    }

)->get();
        
       
        return view('admin.agents.index', compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = Region::all();
       return view('admin.agents.create', compact('regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AgentRequest $request)
    {
$region = Region::where('name', $request->region)->first();
 $role_agent  = Role::where('name', 'agent')->first();

  
    $agent = new User();
    $agent->name = $request->name;
    $agent->email = $request->email;
    $agent->password = bcrypt('secret');
    $agent->save();
    $agent->roles()->attach($role_agent);
    $agent->regions()->attach($region);

    return redirect()->route('agents.index')->with('message','Agent has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $agent)
    {
        
       $user_region = $agent->regions()->get();
       $regions = Region::all();


  
        return view('admin.agents.edit', compact('agent','regions','user_region'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AgentRequest $request, User $agent)
    {
       $agent->update($request->all());
        return redirect()->route('agents.index')->with('message','Agent has been updated');
            }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AgentRequest $request,User $agent)
    {
    $agent = User::with('regions->$request->$region');
       $agent->delete();

    return redirect()->route('agents.index')->with('message','Agent has been deleted');
            }
}
