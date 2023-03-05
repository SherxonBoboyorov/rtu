<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateAdmissionMasterCategory;
use App\Http\Requests\Admin\UpdateAdmissionMasterCategory;
use App\Models\AdmissionMasterCategory;
use Illuminate\Http\Request;

class AdmissionMasterCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admissionmastercategories = AdmissionMasterCategory::orderBy('created_at', 'DESC')->get();
        return view('admin.admissionmastercategory.index', compact('admissionmastercategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admissionmastercategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateAdmissionMasterCategory  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAdmissionMasterCategory $request)
    {
        $data = $request->all();

        if(AdmissionMasterCategory::create($data)) {
            return redirect()->route('admissionmastercategory.index')->with('message', "created seccessfully!!!");
        }
        return redirect()->route('admissionmastercategory.index')->with('message', "unable to created!!!");
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
        $admissionmastercategory = AdmissionMasterCategory::find($id);
        return view('admin.admissionmastercategory.edit', compact('admissionmastercategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateAdmissionMasterCategory  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdmissionMasterCategory $request, $id)
    {
        if (!AdmissionMasterCategory::find($id)) {
            return redirect()->route('admissionmastercategory.index')->with('message', "not fount");
        }

        $admissionmastercategory = AdmissionMasterCategory::find($id);

        $data = $request->all();

        if ($admissionmastercategory->update($data)) {
            return redirect()->route('admissionmastercategory.index')->with('message', "changed successfully!!!");
        }
        return redirect()->route('admissionmastercategory.index')->with('message', "Unable to update!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!AdmissionMasterCategory::find($id)) {
            return redirect()->route('admissionmastercategory.index')->with('message', "not found");
        }

        $admissionmastercategory = AdmissionMasterCategory::find($id);

        if ($admissionmastercategory->delete()) {
            return redirect()->route('admissionmastercategory.index')->with('message', "deleted successfully");
        }
        return redirect()->route('admissionmastercategory.index')->with('message', "unable to delete");
    }
}
