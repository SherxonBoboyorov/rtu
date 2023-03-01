<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateNorm;
use App\Http\Requests\Admin\UpdateNorm;
use App\Models\Norm;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $norms = Norm::orderBy('created_at', 'DESC')->paginate(12);
        return view('admin.norm.index', compact('norms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.norm.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateNorm  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNorm $request)
    {
        $data = $request->all();

        $data['slug_ru'] = Str::slug($request->title_ru, '-', 'ru');
        $data['slug_uz'] = Str::slug($request->title_uz, '-', 'uz');
        $data['slug_en'] = Str::slug($request->title_en, '-', 'en');

        if(Norm::create($data)) {
            return redirect()->route('norm.index')->with('message', "Norms & statements created successfully!!!");
        }
        return redirect()->route('norm.index')->with('message', "Unable to created Norms & statements!!!");
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
        $norm = Norm::find($id);
        return view('admin.norm.edit', compact('norm'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateNorm  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNorm $request, $id)
    {
        if (!Norm::find($id)) {
            return redirect()->route('norm.index')->with('message', "Norms & statements not fount");
        }

        $norm = Norm::find($id);

        $data = $request->all();

        $data['slug_ru'] = Str::slug($request->title_ru, '-', 'ru');
        $data['slug_uz'] = Str::slug($request->title_uz, '-', 'uz');
        $data['slug_en'] = Str::slug($request->title_en, '-', 'en');

        if ($norm->update($data)) {
            return redirect()->route('norm.index')->with('message', "Norms & statements changed successfully!!!");
        }
        return redirect()->route('norm.index')->with('message', "Unable to update Norms & statements!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Norm::find($id)) {
            return redirect()->route('norm.index')->with('message', "Norms & statements not found");
        }

        $norm = Norm::find($id);

        if ($norm->delete()) {
            return redirect()->route('norm.index')->with('message', "Norms & statements deleted successfully");
        }
        return redirect()->route('norm.index')->with('message', "unable to delete Norms & statements");
    }
}
