<?php

namespace Ameyem\Http\Controllers;

use Illuminate\Http\Request;
use App\Slot;

class SlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('home');
    // }
    public function submit(Request $request){
        // return $request->input('date');
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'date' => 'required',
            'slot' => 'required' 
        ]); 

        //create new slot
        $Slot = new slot;
        $Slot->name = $request->input('name');
        $Slot->email = $request->input('email');
        $Slot->date = $request->input('date');
        $Slot->slot = $request->input('slot');

        //save slot
        $Slot->save();

        //redirect
        return 'SUCCESS';
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
