<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateStructure;
use App\Http\Requests\Admin\UpdateStructure;
use App\Models\Structure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $structures = Structure::orderBy('created_at', 'DESC')->get();
        return view('admin.structure.index', compact('structures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.structure.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateStructure  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateStructure $request)
    {
        $data = $request->all();

        $data['image'] = Structure::uploadImage($request);

        if(Structure::create($data)) {
            return redirect()->route('structure.index')->with('message', "Structures created successfully!!!");
        }
        return redirect()->route('structure.index')->with('message', "Unable to created Structures!!!");

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
        $structure = Structure::find($id);
        return view('admin.structure.edit', compact('structure'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateStructure  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStructure $request, $id)
    {
        if (!Structure::find($id)) {
            return redirect()->route('structure.index')->with('message', 'Structures not found');
        }

        $structure = Structure::find($id);

        $data = $request->all();
        $data['image'] = Structure::updateImage($request, $structure);

        if ($structure->update($data)) {
            return redirect()->route('structure.index')->with('message', 'Structures changed successfully');
        }
        return redirect()->route('structure.index')->with('message', 'Unable to update Structures');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Structure::find($id)) {
            return redirect()->route('structure.index')->with('message', "Structures not found");
        }

        $structure = Structure::find($id);

        if (File::exists(public_path() . $structure->image)) {
            File::delete(public_path() . $structure->image);
        }

        if ($structure->delete()) {
            return redirect()->route('structure.index')->with('message', "Structures deleted successfully");
        }
        return redirect()->route('structure.index')->with('message', "unable to delete Structures");
    }
}
