<?php

namespace App\Http\Controllers;

use App\Models\Org;
use Illuminate\Http\Request;

class OrgController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard');
    }

    public function login()
    {
        return view('login');
    }

    public function check_login()
    {
        request()->validate([
            'MaTC' => 'required|unique|exists:tochuc',
            'password' => 'required',
        ]);

        $data = request()->all('MaTC', 'password');

        if (auth()->attempt($data)) {
            return redirect()->route('dashboard');
        }
        return redirect()->back();
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
    public function show(Org $org)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Org $org)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Org $org)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Org $org)
    {
        //
    }
}
