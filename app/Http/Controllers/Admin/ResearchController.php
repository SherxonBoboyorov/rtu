<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateResearch;
use App\Http\Requests\Admin\UpdateResearch;
use App\Models\Research;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $researchs = Research::orderBy('created_at', 'DESC')->get();
        return view('admin.research.index', compact('researchs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.research.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateResearch  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateResearch $request)
    {
        $data = $request->all();

        if(Research::create($data)) {
            return redirect()->route('research.index')->with('message', "Research created seccessfully!!!");
        }
        return redirect()->route('research.index')->with('message', "Unable to created Research!!!");
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
        $research = Research::find($id);
        return view('admin.research.edit', compact('research'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateResearch  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateResearch $request, $id)
    {
        if (!Research::find($id)) {
            return redirect()->route('research.index')->with('message', "Research not fount");
        }

        $research = Research::find($id);

        $data = $request->all();

        if ($research->update($data)) {
            return redirect()->route('research.index')->with('message', "Research changed successfully!!!");
        }
        return redirect()->route('research.index')->with('message', "Unable to update Research!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Research::find($id)) {
            return redirect()->route('research.index')->with('message', "Research not found");
        }

        $research = Research::find($id);

        if ($research->delete()) {
            return redirect()->route('research.index')->with('message', "Research deleted successfully");
        }
        return redirect()->route('research.index')->with('message', "unable to delete Research");
    }
}
