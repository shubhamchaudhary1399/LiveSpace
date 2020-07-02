<?php

namespace App\Http\Controllers;
use App\Addroom;
use Illuminate\Http\Request;

class officerooms extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $details = Addroom::where('type','LIKE','%'.'Office Room'.'%')->get();
        if(count($details) > 0)
            return view('officerooms')->withDetails($details);
        else return view ('officerooms')->withMessage('No Details found. Try to search again !');
    }
}
