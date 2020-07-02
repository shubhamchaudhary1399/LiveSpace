<?php

namespace App\Http\Controllers;
use App\Addroom;
use Illuminate\Http\Request;

class studyrooms extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $details = Addroom::where('type','LIKE','%'.'Study Room'.'%')->get();
        if(count($details) > 0)
            return view('studyrooms')->withDetails($details);
        else return view ('studyrooms')->withMessage('No Details found. Try to search again !');
    }
}
