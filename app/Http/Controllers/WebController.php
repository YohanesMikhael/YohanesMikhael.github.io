<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebProject;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $web = WebProject::orderBy('Tanggal_Pembuatan')->get();

        return view ('backend.Web.index',[
            'title' => 'Web Project Page',
            'web' => $web
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
        $data['Gambar'] = $request->file('Gambar')->store('Web/Img');
        $data['Demo'] = $request->file('Demo')->store('Web/Demo');

        WebProject::create($data);

        return redirect()->route('web.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $web = WebProject::findOrFail($id);
            return view ('backend.Web.detail',[
                'title' => 'Detail Web Project Page',
                'web' => $web
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(WebProject $web)
    {
        WebProject::destroy($web->id);

        return redirect()->route('web.index');
    }
}
