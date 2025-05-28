<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Manageuser;
use Illuminate\Support\Facades\Auth;


class ManageuserController extends Controller
{
    public function index()
    {
         // $user = auth()->user();
        $manageusers = Manageuser::all();
         return view('admin.manageuser.index',compact('manageusers'));
    }
    public function create()
    {
        return view('admin.manageuser.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string',
            'email' => 'required|string',
            'address' => 'required|string',
        ]);

        Manageuser::create($request->all());
        return redirect()->route('manageuser.index')->with('success', 'User created successfully.');
    }

    public function edit($id)
{
    $manageuser = Manageuser::findOrFail($id);
    return view('admin.manageuser.edit', compact('manageuser'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'fullname' => 'required|string',
        'email' => 'required|email',
        'address' => 'required|string',
    ]);

    $manageuser = Manageuser::findOrFail($id);
    $manageuser->update($request->all());

    return redirect()->route('manageuser.index')->with('success', 'User updated successfully.');
}

    // public function destroy(manageuser $manageuser)
    // {
    //     $manageuser->delete();
    //     return redirect()->route('manageuser.index')->with('success', 'User deleted successfully.');
     // }
    public function destroy($id)
{
    $manageuser = Manageuser::findOrFail($id);
    $manageuser->delete();

    return redirect()->route('manageuser.index')->with('success', 'User deleted successfully.');
}
public function show($id)
{
    $manageuser = Manageuser::findOrFail($id);
    return view('admin.manageuser.show', compact('manageuser'));
}


 }
