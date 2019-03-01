<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Room;
class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::latest()->paginate(5);
        return view('room.index',compact('rooms'))->with('i',(request()->input('page',1)-1)*5);

    }
    public function indexx()
    {
        return view('indexx');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('room.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
        'capacity' => 'required',
        'roomtype' => 'required',
        'about' => 'required'
       ]); 

       Room::create($request->all());
       return redirect()->route('room.index')->with('success','New Room Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = room::find($id);
        return view('room.detail',compact('room')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = room::find($id);
        return view('room.edit',compact('room')); 
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
        $request->validate([
            'capacity' => 'required',
            'roomtype' => 'required',
            'about' => 'required'
           ]); 

           $room = Room::find($id);
           $room->capacity = $request->get('capacity');
           $room->roomtype = $request->get('roomtype');
           $room->about = $request->get('about');
           $room->save();
           return redirect()->route('room.index')->with('Success','Rooms Updated Successfully');
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
