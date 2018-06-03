<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class ApiController extends Controller
{
    public function all_video($app_id)
    {
    	$data = Video::where('aplikasi_id',$app_id)->orderBy('updated_at','DESC')->get();

    	
    	return $data;


    }
}
