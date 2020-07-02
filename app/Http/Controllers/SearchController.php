<?php

namespace App\Http\Controllers;
use App\Addroom;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $q = $request->input('q');
        $details = Addroom::where('name','LIKE','%'.$q.'%')->orWhere('description','LIKE','%'.$q.'%')->get();
        if(count($details) > 0)
            return view('search')->withDetails($details)->withQuery($q);
        else return view ('search')->withQuery($q);
    }
}
