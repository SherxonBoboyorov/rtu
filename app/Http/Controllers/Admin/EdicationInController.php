<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateEdicationIn;
use App\Http\Requests\Admin\UpdateEdicationIn;
use App\Models\EdicationIn;
use App\Models\EdicationCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EdicationInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $edicationins = EdicationIn::orderBy('created_at', 'DESC')->get();
        return view('admin.edicationin.index', [
            'edicationins' => $edicationins
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $edicationcategories = EdicationCategory::orderBy('created_at', 'DESC')->get();
        return view('admin.edicationin.create', compact('edicationcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateEdicationIn $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEdicationIn $request)
    {
        $data = $request->all();

        $data['image'] = EdicationIn::uploadImage($request);

        if (EdicationIn::create($data)) {
            return redirect()->route('edicationin.index')->with('message', "created seccessfully");
        }
        return redirect()->route('edicationin.index')->with('message', "unable to create");
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
    public function edit(EdicationIn $edicationin)
    {
        $edicationcategory = EdicationCategory::orderBy('created_at', 'DESC')->get();
        return view('admin.edicationin.edit', [
            'edicationcategory' => $edicationcategory,
            'edicationin' => $edicationin
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateEdicationIn  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEdicationIn $request, $id)
    {
        if (!EdicationIn::find($id)) {
            return redirect()->route('edicationin.index')->with('message', 'not found');
        }

        $edicationin = EdicationIn::find($id);

        $data = $request->all();
        $data['image'] = EdicationIn::updateImage($request, $edicationin);

        if ($edicationin->update($data)) {
            return redirect()->route('edicationin.index')->with('message', 'changed successfully');
        }
        return redirect()->route('edicationin.index')->with('message', 'Unable to update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!EdicationIn::find($id)) {
            return redirect()->route('edicationin.index')->with('message', "not found");
        }

        $edicationin = EdicationIn::find($id);

        if (File::exists(public_path() . $edicationin->image)) {
            File::delete(public_path() . $edicationin->image);
        }

        if ($edicationin->delete()) {
            return redirect()->route('edicationin.index')->with('message', "deleted successfully");
        }
        return redirect()->route('edicationin.index')->with('message', "unable to delete");
    }
}
