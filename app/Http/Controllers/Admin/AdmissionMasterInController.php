<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateAdmissionMasterIn;
use App\Http\Requests\Admin\UpdateAdmissionMasterIn;
use App\Models\AdmissionMasterIn;
use App\Models\AdmissionMasterCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdmissionMasterInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admissionmasterins = AdmissionMasterIn::orderBy('created_at', 'DESC')->get();
        return view('admin.admissionmasterin.index', [
            'admissionmasterins' => $admissionmasterins
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admissionmastercategories = AdmissionMasterCategory::orderBy('created_at', 'DESC')->get();
        return view('admin.admissionmasterin.create', compact('admissionmastercategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateAdmissionMasterIn  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAdmissionMasterIn $request)
    {
        $data = $request->all();

        $data['image'] = AdmissionMasterIn::uploadImage($request);

        if (AdmissionMasterIn::create($data)) {
            return redirect()->route('admissionmasterin.index')->with('message', "created seccessfully");
        }
        return redirect()->route('admissionmasterin.index')->with('message', "unable to create");
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
    public function edit(AdmissionMasterIn $admissionmasterin)
    {
        $admissionmastercategory = AdmissionMasterCategory::orderBy('created_at', 'DESC')->get();
        return view('admin.admissionmasterin.edit', [
            'admissionmastercategory' => $admissionmastercategory,
            'admissionmasterin' => $admissionmasterin
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateAdmissionMasterIn  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdmissionMasterIn $request, $id)
    {
        if (!AdmissionMasterIn::find($id)) {
            return redirect()->route('admissionmasterin.index')->with('message', 'not found');
        }

        $admissionmasterin = AdmissionMasterIn::find($id);

        $data = $request->all();
        $data['image'] = AdmissionMasterIn::updateImage($request, $admissionmasterin);

        if ($admissionmasterin->update($data)) {
            return redirect()->route('admissionmasterin.index')->with('message', 'changed successfully');
        }
        return redirect()->route('admissionmasterin.index')->with('message', 'Unable to update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!AdmissionMasterIn::find($id)) {
            return redirect()->route('admissionmasterin.index')->with('message', "not found");
        }

        $admissionmasterin = AdmissionMasterIn::find($id);

        if (File::exists(public_path() . $admissionmasterin->image)) {
            File::delete(public_path() . $admissionmasterin->image);
        }

        if ($admissionmasterin->delete()) {
            return redirect()->route('admissionmasterin.index')->with('message', "deleted successfully");
        }
        return redirect()->route('admissionmasterin.index')->with('message', "unable to delete");
    }
}
