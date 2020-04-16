<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Role;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team= Team::all();
        return view('admin.team.index',compact('team'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   


        $role= Role::all();
        return view('admin.team.add',compact('role'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team= new Team();
        $file= Storage::disk('public')->put('',$request->image);
        $team->image=$file;
        $team->nom=$request->nom;
        $team->text=$request->text;
        $team->role_id=$request->role;
        $team->save();
        return redirect()->route('team.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {   
        $role= Role::all();
        return view('admin.team.edit',compact('team','role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $file= Storage::disk('public')->put('',$request->image);
        $team->image=$file;
        $team->nom=$request->nom;
        $team->text=$request->text;
        $team->role_id=$request->role;
        $team->save();
        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        if(Storage::exists($team->image)){
            Storage::disk('public')->delete($team->image);
        }
        $team->delete();
        return redirect()->back();
    }
}
