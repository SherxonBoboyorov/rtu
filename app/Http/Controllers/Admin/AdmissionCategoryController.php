<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateAdmissionCategory;
use App\Http\Requests\Admin\UpdateAdmissionCategory;
use App\Models\AdmissionCategory;
use Illuminate\Http\Request;

class AdmissionCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admissioncategories = AdmissionCategory::orderBy('created_at', 'DESC')->get();
        return view('admin.admissioncategory.index', compact('admissioncategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admissioncategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateAdmissionCategory  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAdmissionCategory $request)
    {
        $data = $request->all();

        if(AdmissionCategory::create($data)) {
            return redirect()->route('admissioncategory.index')->with('message', "created seccessfully!!!");
        }
        return redirect()->route('admissioncategory.index')->with('message', "unable to created!!!");
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
        $admissioncategory = AdmissionCategory::find($id);
        return view('admin.admissioncategory.edit', compact('admissioncategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateAdmissionCategory  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdmissionCategory $request, $id)
    {
        if (!AdmissionCategory::find($id)) {
            return redirect()->route('admissioncategory.index')->with('message', "not fount");
        }

        $admissioncategory = AdmissionCategory::find($id);

        $data = $request->all();

        if ($admissioncategory->update($data)) {
            return redirect()->route('admissioncategory.index')->with('message', "changed successfully!!!");
        }
        return redirect()->route('admissioncategory.index')->with('message', "Unable to update!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!AdmissionCategory::find($id)) {
            return redirect()->route('admissioncategory.index')->with('message', "not found");
        }

        $admissioncategory = AdmissionCategory::find($id);

        if ($admissioncategory->delete()) {
            return redirect()->route('admissioncategory.index')->with('message', "deleted successfully");
        }
        return redirect()->route('admissioncategory.index')->with('message', "unable to delete");
    }
}
