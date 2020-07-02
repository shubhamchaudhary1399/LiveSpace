<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Addroom;

class AddroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = Addroom::all();
        return view('admin.rooms')->withDetails($details);
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
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'view' => 'required',
            'occupancy' => 'required',
            'size' => 'required',
            'type' => 'required', 
            'img1' => 'required', 
            'img2' => 'required', 
            'img3' => 'required', 
            'img4' => 'required', 
            'original_price' => 'required', 
            'best_price' => 'required',
        ]);

            $file1 = $request->file('img1');
            $file2 = $request->file('img2');
            $file3 = $request->file('img3');
            $file4 = $request->file('img4');
            $filename1 = $file1->getClientOriginalName();
            $extension1 = $file1->getClientOriginalExtension();
            $filename2 = $file2->getClientOriginalName();
            $extension2 = $file2->getClientOriginalExtension();
            $filename3 = $file3->getClientOriginalName();
            $extension3 = $file3->getClientOriginalExtension();
            $filename4 = $file4->getClientOriginalName();
            $extension4 = $file4->getClientOriginalExtension();
            
            $picture1 = date('His') . '-' . $filename1;
            $file1->move(public_path('uploads'), $picture1);
            $picture2 = date('His') . '-' . $filename2;
            $file2->move(public_path('uploads'), $picture2);
            $picture3 = date('His') . '-' . $filename3;
            $file3->move(public_path('uploads'), $picture3);
            $picture4 = date('His') . '-' . $filename4;
            $file4->move(public_path('uploads'), $picture4);
            
        $room = new Addroom([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'view' => $request->input('view'),
            'occupancy' => $request->input('occupancy'),
            'size' => $request->input('size'),
            'type' => $request->input('type'), 
            'original_price' => $request->input('original_price'), 
            'best_price' => $request->input('best_price'),
            'img1' => $picture1,
            'img2' => $picture2,
            'img3' => $picture3,
            'img4' => $picture4,
        ]);

        $room->save();
        return redirect()->action('AddroomController@index')->with('success', "Room Successfully Added");
        //
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
