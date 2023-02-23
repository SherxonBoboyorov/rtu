<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateLabour;
use App\Http\Requests\Admin\UpdateLabour;
use App\Models\Labour;
use Illuminate\Http\Request;

class LabourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labours = Labour::orderBy('created_at', 'DESC')->get();
        return view('admin.labour.index', compact('labours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.labour.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateLabour  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateLabour $request)
    {
        $data = $request->all();

        if(Labour::create($data)) {
            return redirect()->route('labour.index')->with('message', "Labour union created seccessfully!!!");
        }
        return redirect()->route('labour.index')->with('message', "Unable to created Labour union!!!");
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
        $labour = Labour::find($id);
        return view('admin.labour.edit', compact('labour'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateLabour  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLabour $request, $id)
    {
        if (!Labour::find($id)) {
            return redirect()->route('labour.index')->with('message', "Labour union not fount");
        }

        $labour = Labour::find($id);

        $data = $request->all();

        if ($labour->update($data)) {
            return redirect()->route('labour.index')->with('message', "Labour union changed successfully!!!");
        }
        return redirect()->route('labour.index')->with('message', "Unable to update Labour union!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Labour::find($id)) {
            return redirect()->route('labour.index')->with('message', "Labour union not found");
        }

        $labour = Labour::find($id);

        if ($labour->delete()) {
            return redirect()->route('labour.index')->with('message', "Labour union deleted successfully");
        }
        return redirect()->route('labour.index')->with('message', "unable to delete Labour union");
    }
}
