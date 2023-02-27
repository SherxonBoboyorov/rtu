<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateMaster;
use App\Http\Requests\Admin\UpdateMaster;
use App\Models\Master;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masters = Master::orderBy('created_at', 'DESC')->get();
        return view('admin.master.index', compact('masters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.master.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateMaster  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMaster $request)
    {
        $data = $request->all();

        if(Master::create($data)) {
            return redirect()->route('master.index')->with('massage', "Master created successfully!!!");
        }
        return redirect()->route('master.index')->with('massage', "Unable to created Master!!!");
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
        $master = Master::find($id);
        return view('admin.master.edit', compact('master'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateMaster  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMaster $request, $id)
    {
        if (!Master::find($id)) {
            return redirect()->route('master.index')->with('message', "Masters not fount");
        }

        $master = Master::find($id);

        $data = $request->all();

        if ($master->update($data)) {
            return redirect()->route('master.index')->with('message', "Masters changed successfully!!!");
        }
        return redirect()->route('master.index')->with('message', "Unable to update Masters!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Master::find($id)) {
            return redirect()->route('master.index')->with('message', "Masters union not found");
        }

        $master = Master::find($id);

        if ($master->delete()) {
            return redirect()->route('master.index')->with('message', "Masters deleted successfully");
        }
        return redirect()->route('master.index')->with('message', "unable to delete Masters");
    }
}
