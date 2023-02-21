<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateMagistracy;
use App\Http\Requests\Admin\UpdateMagistracy;
use App\Models\Magistracy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MagistracyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $magistracies = Magistracy::orderBy('created_at', 'DESC')->get();
        return view('admin.magistracy.index', compact('magistracies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.magistracy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateMagistracy  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMagistracy $request)
    {
        $data = $request->all();
        $data['image'] = Magistracy::uploadImage($request);

        if(Magistracy::create($data)) {
            return redirect()->route('magistracy.index')->with('message', "Magistracy created successfully!!!");
        }
        return redirect()->route('magistracy.index')->with('message', "Unable to created Magistracy!!!");
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
        $magistracy = Magistracy::find($id);
        return view('admin.magistracy.edit', compact('magistracy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateMagistracy  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMagistracy $request, $id)
    {
        if (!Magistracy::find($id)) {
            return redirect()->route('magistracy.index')->with('message', 'Magistracy not found');
        }

        $magistracy = Magistracy::find($id);

        $data = $request->all();
        $data['image'] = Magistracy::updateImage($request, $magistracy);

        if ($magistracy->update($data)) {
            return redirect()->route('magistracy.index')->with('message', 'Magistracy changed successfully');
        }
        return redirect()->route('magistracy.index')->with('message', 'Unable to update Magistracy');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Magistracy::find($id)) {
            return redirect()->route('magistracy.index')->with('message', "Magistracy not found");
        }

        $magistracy = Magistracy::find($id);

        if (File::exists(public_path() . $magistracy->image)) {
            File::delete(public_path() . $magistracy->image);
        }

        if ($magistracy->delete()) {
            return redirect()->route('magistracy.index')->with('message', "Magistracy deleted successfully");
        }
        return redirect()->route('magistracy.index')->with('message', "unable to delete Magistracy");
    }
}
