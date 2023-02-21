<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreatePhoto;
use App\Http\Requests\Admin\UpdatePhoto;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::orderBy('created_at', 'DESC')->paginate(12);
        return view('admin.photo.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.photo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreatePhoto  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePhoto $request)
    {
        $data = $request->all();

        $data['image'] = Photo::uploadImage($request);
        $data['slug_ru'] = Str::slug($request->title_ru, '-', 'ru');
        $data['slug_uz'] = Str::slug($request->title_uz, '-', 'uz');
        $data['slug_en'] = Str::slug($request->title_en, '-', 'en');

        if(Photo::create($data)) {
            return redirect()->route('photo.index')->with('message', "Photo gallery created successfully!!!");
        }
        return redirect()->route('photo.index')->with('message', "Unable to created Photo gallery!!!");

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
        $photo = Photo::find($id);
        return view('admin.photo.edit', compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdatePhoto  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePhoto $request, $id)
    {
        if (!Photo::find($id)) {
            return redirect()->route('photo.index')->with('message', "Photo gallery not fount");
        }

        $photo = Photo::find($id);

        $data = $request->all();
        $data['image'] = Photo::updateImage($request, $photo);

        $data['slug_ru'] = Str::slug($request->title_ru, '-', 'ru');
        $data['slug_uz'] = Str::slug($request->title_uz, '-', 'uz');
        $data['slug_en'] = Str::slug($request->title_en, '-', 'en');

        if ($photo->update($data)) {
            return redirect()->route('photo.index')->with('message', "Photo gallery changed successfully");
        }
        return redirect()->route('photo.index')->with('message', "Unable to update Photo gallery");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Photo::find($id)) {
            return redirect()->route('photo.index')->with('message', "Photo gallery not found");
        }

        $photo = Photo::find($id);

        if (File::exists(public_path() . $photo->image)) {
            File::delete(public_path() . $photo->image);
        }

        if ($photo->delete()) {
            return redirect()->route('photo.index')->with('message', "Photo gallery deleted successfully");
        }
        return redirect()->route('photo.index')->with('message', "unable to delete Photo gallery");
    }
}
