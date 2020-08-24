<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filiais;

class ControladorFilial extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Filiais::all();
        return view('filiais', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novofilial');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = new Filiais();
        $cat->nome = $request->input('nomeFilial');
        $cat->cidade = $request->input('nomeCidade');
        $cat->cnpj = $request->input('nomeCnpj');
        $cat->endereco = $request->input('nomeEndereco');
        $cat->email = $request->input('nomeEmail');
        $cat->latitude = $request->input('nomeLatitude');
        $cat->longitude = $request->input('nomeLongitude');

        $cat->save();
        return redirect('/home');
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
        $cat = Filiais::find($id);
        if(isset($cat)) {
            return view('editarfilial', compact('cat'));
        }
        return redirect('/home');
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
        $cat = Filiais::find($id);
        if(isset($cat)) {
            $cat->nome = $request->input('nomeFilial');
            $cat->cidade = $request->input('nomeCidade');
            $cat->cnpj = $request->input('nomeCnpj');
            $cat->endereco = $request->input('nomeEndereco');
            $cat->email = $request->input('nomeEmail');
            $cat->latitude = $request->input('nomeLatitude');
            $cat->longitude = $request->input('nomeLongitude');
            $cat->save();
        }
        return redirect('/filiais');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Filiais::find($id);
        if (isset($cat)) {
            $cat->delete();
        }
        return redirect('/home');
    }
}
