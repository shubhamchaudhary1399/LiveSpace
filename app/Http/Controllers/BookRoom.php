<?php

namespace App\Http\Controllers;
use App\AddRoom;
use App\User;
use App\Booking;
use Illuminate\Http\Request;

class BookRoom extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $details = Addroom::whereid($id)->first();
        return view('bookroom')->withDetails($details);
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
    public function store(Request $request,$id)
    {
        $this->validate($request,[
            'address' => 'required',
            'zip' => 'required', 
            'city' => 'required', 
            'state' => 'required',
        ]);

        $details = AddRoom::whereid($id)->first();
            
        $book = new Booking([
            'pg_name'=> $details->name,
            'total_amt' => $details->best_price,
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'contact' => $request->input('number'),
            'add_line1' => $request->input('address'),
            'zip' => $request->input('zip'),
            'city' => $request->input('city'), 
            'state' => $request->input('state'),
        ]);

        $book->save();
        return view('success')->with('success', "PG Room booked Successfully");
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
    public function destroy($id)
    {
        //
    }
}
