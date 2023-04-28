<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sosmed;

class SosmedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sosmed = Sosmed::get();
        return view ('backend.sosmed.index',[
            'title' => 'Sosial Media Page',
            'sosmed' => $sosmed
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

        Sosmed::create($data);

        return redirect()->route('sosmed.index');
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
        $sosmed = Sosmed::find($id);

        return view('Backend.sosmed.edit',[
            'title' => 'Edit Sosial Media Page',
            'sosmed' => $sosmed
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
        $sosmed = Sosmed::find($id);

        $data = $request->all();

        $sosmed->update($data);

        return redirect()->route('sosmed.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sosmed $sosmed)
    {
        Sosmed::destroy($sosmed->id);

        return redirect()->route('sosmed.index');
    }
}
