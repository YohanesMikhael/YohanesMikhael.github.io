<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home = Home::get();
        return view ('backend.home.index',[
            'title' => 'Home Page',
            'home' => $home
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['Profil_1'] = $request->file('Profil_1')->store('home');
        $data['Profil_2'] = $request->file('Profil_2')->store('home');

        Home::create($data);

        return redirect()->route('dashboard.index');
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
    public function edit($id)
    {
        $home = Home::find($id);

        return view('Backend.Home.edit',[
            'title' => 'Edit Home Page',
            'home' => $home
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $home = Home::find($id);

        $data = $request->all();
        $data['Profil_1'] = $request->file('Profil_1')->store('home');
        $data['Profil_2'] = $request->file('Profil_2')->store('home');

        $home->update($data);

        return redirect()->route('dashboard.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
