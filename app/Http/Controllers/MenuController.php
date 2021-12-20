<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('menu', [
            'title' => 'Menu',
            'items' => Item::all()
        ]);
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
        $validatedData = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'image' => 'image|required'
        ]);

        $validatedData['image'] = $request->file('image')->store('post-images');
        $validatedData['id'] = auth()->user()->id;

        Item::create($validatedData);

        return redirect('/menu')->with('success', 'New menu has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('menu', [
            'title' => 'Menu',
            'item' => $item,
            'items' => Item::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'image' => 'required'
        ]);
        
        $validatedData['id'] = auth()->user()->id;

        $item = Item::find($id);
        $item->update($request->all());
            // ->update($validatedData);

        return redirect('/menu')->with('success3', 'Menu has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id)->delete();

        return redirect('/menu')->with('success2', 'Menu has been deleted!');
    }
}
