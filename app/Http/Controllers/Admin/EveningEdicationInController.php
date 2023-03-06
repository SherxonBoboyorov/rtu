<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateEveningEdicationIn;
use App\Http\Requests\Admin\UpdateEveningEdicationIn;
use App\Models\EveningEdicationIn;
use App\Models\EveningEdicationCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EveningEdicationInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eveningedicationins = EveningEdicationIn::orderBy('created_at', 'DESC')->get();
        return view('admin.eveningedicationin.index', [
            'eveningedicationins' => $eveningedicationins
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eveningedicationcategories = EveningEdicationCategory::orderBy('created_at', 'DESC')->get();
        return view('admin.eveningedicationin.create', compact('eveningedicationcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateEveningEdicationIn  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEveningEdicationIn $request)
    {
        $data = $request->all();

        $data['image'] = EveningEdicationIn::uploadImage($request);

        if (EveningEdicationIn::create($data)) {
            return redirect()->route('eveningedicationin.index')->with('message', "created seccessfully");
        }
        return redirect()->route('eveningedicationin.index')->with('message', "unable to create");
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
    public function edit(EveningEdicationIn $eveningedicationin)
    {
        $eveningedicationcategory = EveningEdicationCategory::orderBy('created_at', 'DESC')->get();
        return view('admin.eveningedicationin.edit', [
            'eveningedicationcategory' => $eveningedicationcategory,
            'eveningedicationin' => $eveningedicationin
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateEveningEdicationIn  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEveningEdicationIn $request, $id)
    {
        if (!EveningEdicationIn::find($id)) {
            return redirect()->route('eveningeducationin.index')->with('message', 'not found');
        }

        $eveningedicationin = EveningEdicationIn::find($id);

        $data = $request->all();
        $data['image'] = EveningEdicationIn::updateImage($request, $eveningedicationin);

        if ($eveningedicationin->update($data)) {
            return redirect()->route('eveningedicationin.index')->with('message', 'changed successfully');
        }
        return redirect()->route('eveningedicationin.index')->with('message', 'Unable to update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!EveningEdicationIn::find($id)) {
            return redirect()->route('eveningedicationin.index')->with('message', "not found");
        }

        $eveningedicationin = EveningEdicationIn::find($id);

        if (File::exists(public_path() . $eveningedicationin->image)) {
            File::delete(public_path() . $eveningedicationin->image);
        }

        if ($eveningedicationin->delete()) {
            return redirect()->route('eveningedicationin.index')->with('message', "deleted successfully");
        }
        return redirect()->route('eveningedicationin.index')->with('message', "unable to delete");
    }
}
