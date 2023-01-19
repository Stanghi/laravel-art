<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\MuseumRequest;
use App\Models\Museum;

class MuseumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $museums = Museum::orderBy('id', 'desc')->paginate(10);
        return view('admin.museums.index', compact('museums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(('admin.museums.create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MuseumRequest $request)
    {
        $form_data = $request->all();

        $new_museum = new Museum();
        $form_data['slug'] = Museum::generateSlug($form_data['name']);
        $new_museum->fill($form_data);
        $new_museum->save();

        return redirect()->route('admin.museums.show', $new_museum);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Museum  $museum
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $museum = Museum::findOrFail($id);
        return view('admin.museums.show', compact('museum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Museum  $museum
     * @return \Illuminate\Http\Response
     */
    public function edit(Museum $museum)
    {
        return view('admin.museums.edit', compact('museum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Museum  $museum
     * @return \Illuminate\Http\Response
     */
    public function update(MuseumRequest $request, Museum $museum)
    {
        $form_data = $request->all();

        if ($form_data['name'] != $museum->name) {
            $form_data['slug'] = Museum::generateSlug(($form_data['name']));
        } else {
            $form_data['slug'] = $museum->slug;
        }

        $museum->update($form_data);
        return redirect()->route('admin.museums.show', $museum);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Museum  $museum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Museum $museum)
    {
        $museum->delete();
        return redirect()->route('admin.museums.index')->with('deleted', "$museum->title eliminato correttamente");
    }
}
