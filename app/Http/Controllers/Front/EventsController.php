<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventsController extends Controller
{
    public function list(Request $request)
    {
        $events = Event::select(DB::raw('*, MONTH(created_at) as month'))->orderBy('created_at', 'DESC');
        if($request->month){
            $events = $events->whereMonth('created_at', $request->month);
        }
        $events = $events->paginate(6);
        $years = Event::select(DB::raw('YEAR(created_at) as year'))->distinct()->pluck('year')->toArray();

        return view('front.events.list', compact(
            'events',
            'years'
        ));
    }

    public function show($slug)
    {
        $event = Event::where('slug_uz', $slug)
            ->orWhere('slug_ru', $slug)
            ->orWhere('slug_en', $slug)
            ->first();

        $event->views += 1;
        $event->save();

        $event_list = Event::orderBy('created_at', 'DESC')->paginate(4);

        return view('front.events.show', compact(
            'event',
            'event_list',
        ));
    }
}
