<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateMasterIn;
use App\Http\Requests\Admin\UpdateMasterIn;
use App\Models\MasterIn;
use App\Models\MasterCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MasterInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masterins = MasterIn::orderBy('created_at', 'DESC')->get();
        return view('admin.masterin.index', compact('masterins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mastercategories = MasterCategory::orderBy('created_at', 'DESC')->get();
        return view('admin.masterin.create', [
            'mastercategories' => $mastercategories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateMasterIn  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMasterIn $request)
    {
        $data = $request->all();

        $data['image'] = MasterIn::uploadImage($request);

        if (MasterIn::create($data)) {
            return redirect()->route('masterin.index')->with('message', "Master product created seccessfully");
        }
        return redirect()->route('masterin.index')->with('message', "unable to create Master product");
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
    public function edit(MasterIn $masterin)
    {
        $mastercategory = MasterCategory::orderBy('created_at', 'DESC')->get();
        return view('admin.masterin.edit', [
            'mastercategory' => $mastercategory,
            'masterin' => $masterin
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateMasterIn  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMasterIn $request, $id)
    {
        if (!MasterIn::find($id)) {
            return redirect()->route('masterin.index')->with('message', 'Master product not found');
        }

        $masterin = MasterIn::find($id);

        $data = $request->all();
        $data['image'] = MasterIn::updateImage($request, $masterin);

        if ($masterin->update($data)) {
            return redirect()->route('masterin.index')->with('message', 'Master product changed successfully');
        }
        return redirect()->route('masterin.index')->with('message', 'Unable to update Master product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!MasterIn::find($id)) {
            return redirect()->route('masterin.index')->with('message', "Master product not found");
        }

        $masterin = MasterIn::find($id);

        if (File::exists(public_path() . $masterin->image)) {
            File::delete(public_path() . $masterin->image);
        }

        if ($masterin->delete()) {
            return redirect()->route('masterin.index')->with('message', "Master product deleted successfully");
        }
        return redirect()->route('masterin.index')->with('message', "unable to delete Master product");
    }
}
