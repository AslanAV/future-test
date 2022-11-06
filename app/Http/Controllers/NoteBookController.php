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
        $contacts = NoteBook::paginate(10);
        return response()->json($contacts);
    }

    public function store(StoreNoteBookRequest $request)
    {
        $contact = new NoteBook();

        $contact->fill($request->toArray());
        $contact->save();

        return response()->json($contact, 201);
    }

    public function show($id)
    {
        $noteBook = NoteBook::findOrFail($id);
        return response()->json($noteBook);
    }

    public function update(UpdateNoteBookRequest $request, $id)
    {
        $validated = $request->validated();
        $noteBook = NoteBook::findOrFail($id);
        $noteBook->fill($validated);
        $noteBook->save();
        return response()->json($noteBook);
    }


    public function destroy($id)
    {
        $noteBook = NoteBook::findOrFail($id);
        $noteBook->deleteOrFail();
        return response()->noContent();
    }
}
