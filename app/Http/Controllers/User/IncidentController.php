<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Incident;
use Illuminate\Support\Facades\Auth;

class IncidentController extends Controller
{
    public function index()
    {
        $incidents = Incident::all(); // Or filter by user: Incident::where('user_id', Auth::id())->get()
        return view('users.incidents.index', compact('incidents'));
    }

    public function create()
    {
        return view('users.incidents.create');
    }

    public function show($id)
{
    $incident = Incident::findOrFail($id);
    return view('users.incidents.show', compact('incident'));
}


    public function store(Request $request)
    {
        $request->validate([
            'fullname'   => 'required|string',
            'age'        => 'required|integer', // Ensure this exists in your DB
            'address'    => 'required|string',
            'bod'        => 'required|date',
            'incidents'  => 'required|string',
        ]);

        Incident::create($request->all());

        return redirect()->route('users.incidents.index')->with('success', 'Incident created successfully.');

    }

    public function edit($id)
    {
        $incidents = Incident::findOrFail($id);
        return view('users.incidents.edit', compact('incidents'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'fullname'   => 'required|string',
            'age'        => 'required|integer',
            'address'    => 'required|string',
            'bod'        => 'required|date',
            'incidents'  => 'required|string',
        ]);

        $incidents = Incident::findOrFail($id);
        $incidents->update($request->all());

       return redirect()->route('incidents.index')->with('success', 'Incident updated successfully.');

    }

    public function destroy($id)
    {
        $incidents = Incident::findOrFail($id);
        $incidents->delete();

        return redirect()->route('users.incidents.index')->with('success', 'Incident report deleted successfully.');
    }
}
