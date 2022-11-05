<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoteBookRequest;
use App\Http\Requests\UpdateNoteBookRequest;
use App\Models\NoteBook;
use Carbon\Carbon;

class NoteBookController extends Controller
{
    public function index()
    {
        $contacts = NoteBook::paginate(5);
        return response()->json($contacts);
    }

    public function store(StoreNoteBookRequest $request)
    {
        $contact = new NoteBook();

        $contact->fill($request->toArray());
        $contact->save();

        return response()->json($contact, 201);
    }

    public function show(NoteBook $noteBook)
    {
        return response()->json($noteBook);
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
