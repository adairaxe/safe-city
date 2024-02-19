<?php

namespace App\Http\Controllers;

use App\Models\Userapp;
use Illuminate\Http\Request;

class UserappController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Userapp::all();
        foreach ($users as $user){
            $data_response=[
                "name"=>$user->name,
                "email"=>$user->email
            ];
        }
        
        return response()->json($data_response);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Userapp $userapp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Userapp $userapp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Userapp $userapp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Userapp $userapp)
    {
        //
    }
}
