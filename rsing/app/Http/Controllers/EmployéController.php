<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EmployéController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $employés = User::all();
        return view('employés.index', compact('employés'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('employés.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $employé = new User;
        $employé->nom = $request->input('name');
        $employé->prix = $request->input('email');
        $employé->save();

        return redirect()->route('employés.index');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $employé)
    {
        //

        $employé->delete();

        return redirect()->route('employés.index');
    }
}
