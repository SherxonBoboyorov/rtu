<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateAdmissionIn;
use App\Http\Requests\Admin\UpdateAdmissionIn;
use App\Models\AdmissionIn;
use App\Models\AdmissionCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdmissionInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admissionins = AdmissionIn::orderBy('created_at', 'DESC')->get();
        return view('admin.admissionin.index', [
            'admissionins' => $admissionins
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admissioncategories = AdmissionCategory::orderBy('created_at', 'DESC')->get();
        return view('admin.admissionin.create', compact('admissioncategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateAdmissionIn  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAdmissionIn $request)
    {
        $data = $request->all();

        $data['image'] = AdmissionIn::uploadImage($request);

        if (AdmissionIn::create($data)) {
            return redirect()->route('admissionin.index')->with('message', "created seccessfully");
        }
        return redirect()->route('admissionin.index')->with('message', "unable to create");
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
    public function edit(Admissionin $admissionin)
    {
        $admissioncategory = AdmissionCategory::orderBy('created_at', 'DESC')->get();
        return view('admin.admissionin.edit', [
            'admissioncategory' => $admissioncategory,
            'admissionin' => $admissionin
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateAdmissionIn $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdmissionIn $request, $id)
    {
        if (!AdmissionIn::find($id)) {
            return redirect()->route('admissionin.index')->with('message', 'not found');
        }

        $admissionin = AdmissionIn::find($id);

        $data = $request->all();
        $data['image'] = AdmissionIn::updateImage($request, $admissionin);

        if ($admissionin->update($data)) {
            return redirect()->route('admissionin.index')->with('message', 'changed successfully');
        }
        return redirect()->route('admissionin.index')->with('message', 'Unable to update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!AdmissionIn::find($id)) {
            return redirect()->route('admissionin.index')->with('message', "not found");
        }

        $admissionin = AdmissionIn::find($id);

        if (File::exists(public_path() . $admissionin->image)) {
            File::delete(public_path() . $admissionin->image);
        }

        if ($admissionin->delete()) {
            return redirect()->route('admissionin.index')->with('message', "deleted successfully");
        }
        return redirect()->route('admissionin.index')->with('message', "unable to delete");
    }
}
