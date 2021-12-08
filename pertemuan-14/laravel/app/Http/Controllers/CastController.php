<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('cast')->get();
        return view('cast', compact('data'));
    }
    // mengembalikan data lebih dari satu dengan fungsi
    // compact() yang berguna untuk mem-passing data tersebut secara sekaligus.
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createCast');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = DB::table('cast')->insert([
            'name' => $request->name,
            'umur' => $request->umur,
            'bio' => $request->bio
        ]);
        return redirect('/cast');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('cast')->where('id', $id)->get();
        return view('showCast', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('cast')->where('id', $id)->get();
        return view('editCast', compact('data'));
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
        $data = DB::table('cast')->where('id', $id)->update([
            'name' => $request->name,
            'umur' => $request->umur,
            'bio' => $request->bio
        ]);
        return redirect('/cast');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('cast')->where('id', $id)->delete();
        return redirect('/cast');
    }
}
