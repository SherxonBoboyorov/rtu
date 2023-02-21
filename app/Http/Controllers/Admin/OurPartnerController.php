<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateOurPartner;
use App\Http\Requests\Admin\UpdateOurPartner;
use App\Models\OurPartner;
use Illuminate\Http\Request;
use Illuninate\Support\Facades\File;

class OurPartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ourpartners = OurPartner::orderBy('created_at', 'DESC')->get();
        return view('admin.ourpartner.index', compact('ourpartners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ourpartner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateOurPartner  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateOurPartner $request)
    {
        $data = $request->all();

        $data['image'] = OurPartner::uploadImage($request);

        if (OurPartner::create($data)) {
            return redirect()->route('ourpartner.index')->with('message', "Our Partners created seccessfully");
        }
        return redirect()->route('ourpartner.index')->with('message', "unable to create Our Partners");
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
        $ourpartner = OurPartner::find($id);
        return view('admin.ourpartner.edit', compact('ourpartner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateOurPartner  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOurPartner $request, $id)
    {
        if (!OurPartner::find($id)) {
            return redirect()->route('ourpartner.index')->with('message', 'Our Partners not found');
        }

        $ourpartner = OurPartner::find($id);

        $data = $request->all();
        $data['image'] = OurPartner::updateImage($request, $ourpartner);

        if ($ourpartner->update($data)) {
            return redirect()->route('ourpartner.index')->with('message', 'Our Partners changed successfully');
        }
        return redirect()->route('ourpartner.index')->with('message', 'Unable to update Our Partners');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!OurPartner::find($id)) {
            return redirect()->route('ourpartner.index')->with('message', "Our Partners not found");
        }

        $ourpartner = OurPartner::find($id);

        if (File::exists(public_path() . $ourpartner->image)) {
            File::delete(public_path() . $ourpartner->image);
        }

        if ($ourpartner->delete()) {
            return redirect()->route('ourpartner.index')->with('message', "Our Partners deleted successfully");
        }
        return redirect()->route('ourpartner.index')->with('message', "unable to delete Our Partners");
    }
}
