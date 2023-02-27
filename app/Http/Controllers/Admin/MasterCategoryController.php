<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateMasterCategory;
use App\Http\Requests\Admin\UpdateMasterCategory;
use App\Models\MasterCategory;
use Illuminate\Http\Request;

class MasterCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mastercategories = MasterCategory::orderBy('created_at', 'DESC')->get();
        return view('admin.mastercategory.index', compact('mastercategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mastercategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateMasterCategory  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMasterCategory $request)
    {
        $data = $request->all();

        if(MasterCategory::create($data)) {
            return redirect()->route('mastercategory.index')->with('message', "Master Category created seccessfully!!!");
        }
        return redirect()->route('mastercategory.index')->with('message', "unable to created Master Category!!!");
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
        $mastercategory = MasterCategory::find($id);
        return view('admin.mastercategory.edit', compact('mastercategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateMasterCategory  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMasterCategory $request, $id)
    {
        if (!MasterCategory::find($id)) {
            return redirect()->route('mastercategory.index')->with('message', "Master Category not fount");
        }

        $mastercategory = MasterCategory::find($id);

        $data = $request->all();

        if ($mastercategory->update($data)) {
            return redirect()->route('mastercategory.index')->with('message', "Master Category changed successfully!!!");
        }
        return redirect()->route('mastercategory.index')->with('message', "Unable to update Master Category!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!MasterCategory::find($id)) {
            return redirect()->route('mastercategory.index')->with('message', "Master Category not found");
        }

        $mastercategory = MasterCategory::find($id);

        if ($mastercategory->delete()) {
            return redirect()->route('mastercategory.index')->with('message', "Master Category deleted successfully");
        }
        return redirect()->route('mastercategory.index')->with('message', "unable to delete Master Category");
    }
}
