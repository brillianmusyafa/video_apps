<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Aplikasi;
use Illuminate\Http\Request;
use Session;

class AplikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $aplikasi = Aplikasi::paginate(25);

        return view('aplikasi.index', compact('aplikasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('aplikasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Aplikasi::create($requestData);

        Session::flash('flash_message', 'Aplikasi added!');

        return redirect('aplikasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $aplikasi = Aplikasi::with('Videos')->findOrFail($id);

        // dd($aplikasi->Videos);

        return view('aplikasi.show', compact('aplikasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $aplikasi = Aplikasi::findOrFail($id);

        return view('aplikasi.edit', compact('aplikasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $aplikasi = Aplikasi::findOrFail($id);
        $aplikasi->update($requestData);

        Session::flash('flash_message', 'Aplikasi updated!');

        return redirect('aplikasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Aplikasi::destroy($id);

        Session::flash('flash_message', 'Aplikasi deleted!');

        return redirect('aplikasi');
    }
}
