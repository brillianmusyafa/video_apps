<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Video;
use Illuminate\Http\Request;
use Session;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $video = Video::paginate(25);

        return view('video.index', compact('video'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $req)
    {
        $input = $req->all();
        $data['aplikasi_id'] = $input['aplikasi_id'];
        return view('video.create',compact('data'));
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
        // dd($request->all());
        // $requestData['aplikasi_id'] = 1;
        $requestData['video_id'] = $this->extract_param($requestData['video_url']);
        Video::create($requestData);

        Session::flash('flash_message', 'Video added!');

        return redirect()->back();
    }

    public function extract_param($url='')
    {
        parse_str( parse_url( $url, PHP_URL_QUERY ), $url_vars );
        return $url_vars['v'];
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
        $video = Video::findOrFail($id);

        return view('video.show', compact('video'));
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
        $video = Video::findOrFail($id);

        return view('video.edit', compact('video'));
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
        
        $video = Video::findOrFail($id);
        $video->update($requestData);

        Session::flash('flash_message', 'Video updated!');

        return redirect('video');
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
        Video::destroy($id);

        Session::flash('flash_message', 'Video deleted!');

        return redirect('video');
    }
}
