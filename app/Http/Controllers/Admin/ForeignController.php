<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateForeign;
use App\Http\Requests\Admin\UpdateForeign;
use App\Models\Foreign;
use Illuminate\Http\Request;

class ForeignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foreigns = Foreign::orderBy('created_at', 'DESC')->get();
        return view('admin.foreign.index', compact('foreigns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.foreign.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateForeign  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateForeign $request)
    {
        $data = $request->all();
         if(Foreign::create($data)) {
            return redirect()->route('foreign.index')->with('message', "Foreign created successfully!!!");
         }
         return redirect()->route('foreign.index')->with('message', "Unable to created Foreign!!!");
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
        $foreign = Foreign::find($id);
        return view('admin.foreign.edit', compact('foreign'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateForeign  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateForeign $request, $id)
    {
        if (!Foreign::find($id)) {
            return redirect()->route('foreign.index')->with('message', "foreign not fount");
        }

        $foreign = Foreign::find($id);

        $data = $request->all();

        if ($foreign->update($data)) {
            return redirect()->route('foreign.index')->with('message', "Foreign changed successfully!!!");
        }
        return redirect()->route('foreign.index')->with('message', "Unable to update Foreign!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Foreign::find($id)) {
            return redirect()->route('foreign.index')->with('message', "Foreign union not found");
        }

        $foreign = Foreign::find($id);

        if ($foreign->delete()) {
            return redirect()->route('foreign.index')->with('message', "Foreigns deleted successfully");
        }
        return redirect()->route('foreign.index')->with('message', "unable to delete Foreign");
    }
}
