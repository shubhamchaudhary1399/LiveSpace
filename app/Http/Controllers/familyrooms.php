<?php

namespace App\Http\Controllers;
use App\Addroom;
use Illuminate\Http\Request;

class familyrooms extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $details = Addroom::where('type','LIKE','%'.'Family Room'.'%')->get();
        if(count($details) > 0)
            return view('familyrooms')->withDetails($details);
        else return view ('familyrooms')->withMessage('No Details found. Try to search again !');
    }
}
