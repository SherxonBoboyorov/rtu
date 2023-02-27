<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateEvent;
use App\Http\Requests\Admin\UpdateEvent;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use function PHPUnit\Framework\returnSelf;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('created_at', 'DESC')->paginate(12);
        return view('admin.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateEvent  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEvent $request)
    {
        $data = $request->all();

        $data['slug_ru'] = Str::slug($request->title_ru, '-', 'ru');
        $data['slug_uz'] = Str::slug($request->title_uz, '-', 'uz');
        $data['slug_en'] = Str::slug($request->title_en, '-', 'en');

        if(Event::create($data)) {
            return redirect()->route('event.index')->with('message', "Events created successfully!!!");
        }
        return redirect()->route('event.index')->with('message', "Unable to created Events!!!");
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
        $event = Event::find($id);
        return view('admin.event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateEvent  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEvent $request, $id)
    {
        if (!Event::find($id)) {
            return redirect()->route('event.index')->with('message', "Events not fount");
        }

        $event = Event::find($id);

        $data = $request->all();
        $data['slug_ru'] = Str::slug($request->title_ru, '-', 'ru');
        $data['slug_uz'] = Str::slug($request->title_uz, '-', 'uz');
        $data['slug_en'] = Str::slug($request->title_en, '-', 'en');

        if ($event->update($data)) {
            return redirect()->route('event.index')->with('message', "Events changed successfully");
        }
        return redirect()->route('event.index')->with('message', "Unable to update Events");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Event::find($id)) {
            return redirect()->route('event.index')->with('message', "Events not found");
        }

        $event = Event::find($id);

        if ($event->delete()) {
            return redirect()->route('event.index')->with('message', "Events deleted successfully");
        }
        return redirect()->route('event.index')->with('message', "unable to delete Events");
    }
}
