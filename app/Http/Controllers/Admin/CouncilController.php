<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateCouncil;
use App\Http\Requests\Admin\UpdateCouncil;
use App\Models\Council;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CouncilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $councils = Council::orderBy('created_at', 'DESC')->paginate(12);
        return view('admin.council.index', compact('councils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.council.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateCouncil $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCouncil $request)
    {
        $data = $request->all();

        $data['image'] = Council::uploadImage($request);

        if(Council::create($data)) {
            return redirect()->route('council.index')->with('message', "Academic Council created successully!!!");
        }
        return redirect()->route('council.index')->with('message', "Unable to created Academic Council!!!");
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
        $council = Council::find($id);
        return view('admin.council.edit', compact('council'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateCouncil  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateCouncil $request, $id)
    {
        if (!Council::find($id)) {
            return redirect()->route('council.index')->with('message', 'Academic Council not found');
        }

        $council = Council::find($id);

        $data = $request->all();
        $data['image'] = Council::updateImage($request, $council);

        if ($council->update($data)) {
            return redirect()->route('council.index')->with('message', 'Academic Council changed successfully');
        }
        return redirect()->route('council.index')->with('message', 'Unable to update Academic Council');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Council::find($id)) {
            return redirect()->route('council.index')->with('message', "Academic Council not found");
        }

        $council = Council::find($id);

        if (File::exists(public_path() . $council->image)) {
            File::delete(public_path() . $council->image);
        }

        if ($council->delete()) {
            return redirect()->route('council.index')->with('message', "Academic Council deleted successfully");
        }
        return redirect()->route('council.index')->with('message', "unable to delete Academic Council");
    }
}
