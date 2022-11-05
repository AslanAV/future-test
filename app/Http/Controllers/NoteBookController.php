<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoteBookRequest;
use App\Http\Requests\UpdateNoteBookRequest;
use App\Models\NoteBook;

class NoteBookController extends Controller
{
    public function index()
    {
        return response()->json([1, 1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNoteBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNoteBookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NoteBook  $noteBook
     * @return \Illuminate\Http\Response
     */
    public function show(NoteBook $noteBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NoteBook  $noteBook
     * @return \Illuminate\Http\Response
     */
    public function edit(NoteBook $noteBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNoteBookRequest  $request
     * @param  \App\Models\NoteBook  $noteBook
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNoteBookRequest $request, NoteBook $noteBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NoteBook  $noteBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(NoteBook $noteBook)
    {
        //
    }
}
