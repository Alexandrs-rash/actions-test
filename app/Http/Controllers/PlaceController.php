<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlaceStoreRequest;
use App\Models\Region;
use App\Models\Tag;
use App\Models\Upload;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Symfony\Component\HttpFoundation\Response;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): \Inertia\Response
    {
        $searchQuery = $request->input('searchQuery');
        $status = (int) $request->input('status');
        $places = Place::select(
            'id',
            'name',
            'lat',
            'len',
            'anons',
            'preview',
            'status'
        );
        if ($status) {
            $places = $places->where('status', $status);
        }
        if ($searchQuery) {
            $places = $places->where('name', 'like', '%'.$searchQuery.'%');
        }
        $places = $places->paginate(5);
        return Inertia::render('Place/Index', [
            'places' => $places,
            'status' => $status,
            'searchQuery' => $searchQuery
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Inertia\Response
    {

        $tags = Tag::select('id', 'name')->get();
        $regions = Region::select('id', 'name')->get();
        return Inertia::render('Place/Create', [
            'tags' => $tags,
            'regions' => $regions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlaceStoreRequest $request): Response
    {
        $validatedData = $request->validated();

        $place = new Place([
            'name' => $validatedData['name'],
            'date_from' => $validatedData['date_from'] ?? null,
            'date_to' => $validatedData['date_to'] ?? null,
            'anons' => $validatedData['anons'] ?? null,
            'alias' => Str::slug($validatedData['name']),
            'region_id' => $validatedData['region_id'] ?? null,
            'status' => $validatedData['status'],
            'lat' => $validatedData['lat'] ?? null,
            'len' => $validatedData['len'] ?? null,
        ]);
        $place->save();


        if ($validatedData['file']) {
            $file = $validatedData['file'];
            $file->store('uploads', 'local');
            $fileName = basename($file);
            $upload = new Upload([
                'owner_id' => $place->id,
                'preview' => $fileName,
                'owner_type' => 1, // TODO хардкод
                'status' => 1, // 1|-1 TODO хардкод, не понятно что означает status у upload
//                'type' => '1|2|3|4' // TODO не понятно что за тип, заменить в будущем
            ]);
            $upload->save();
        }

        // Привязка тегов к месту
        //TODO хардкод, не знаю что такое category
        $place->tags()->attach($validatedData['selectedTags'], ['category' => 1]);

        return Inertia::location(route('places.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
