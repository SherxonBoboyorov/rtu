<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateTender;
use App\Http\Requests\Admin\UpdateTender;
use App\Models\Tender;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenders = Tender::orderBy('created_at', 'DESC')->paginate(12);
        return view('admin.tender.index', compact('tenders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tender.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateTender  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTender $request)
    {
        $data = $request->all();

        $data['slug_ru'] = Str::slug($request->title_ru, '-', 'ru');
        $data['slug_uz'] = Str::slug($request->title_uz, '-', 'uz');
        $data['slug_en'] = Str::slug($request->title_en, '-', 'en');

        if(Tender::create($data)) {
            return redirect()->route('tender.index')->with('message', "Tenders created seccessfully!!!");
        }
        return redirect()->route('tender.index')->with('message', "Unable to created Tender!!!");
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
        $tender = Tender::find($id);
        return view('admin.tender.edit', compact('tender'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateTender  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTender $request, $id)
    {
        if (!Tender::find($id)) {
            return redirect()->route('tender.index')->with('message', "Tender not fount");
        }

        $tender = Tender::find($id);

        $data = $request->all();
        $data['slug_ru'] = Str::slug($request->title_ru, '-', 'ru');
        $data['slug_uz'] = Str::slug($request->title_uz, '-', 'uz');
        $data['slug_en'] = Str::slug($request->title_en, '-', 'en');

        if ($tender->update($data)) {
            return redirect()->route('tender.index')->with('message', "Tenders changed successfully!!!");
        }
        return redirect()->route('tender.index')->with('message', "Unable to update Tenders!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Tender::find($id)) {
            return redirect()->route('tender.index')->with('message', "Tenders not found");
        }

        $tender = Tender::find($id);

        if ($tender->delete()) {
            return redirect()->route('tender.index')->with('message', "Tenders deleted successfully");
        }
        return redirect()->route('tender.index')->with('message', "unable to delete Tender");
    }
}
