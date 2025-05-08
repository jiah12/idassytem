<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
         // $user = auth()->user();

         return view('admin.manageuser.index',);
    }
    public function create()
    {
        return view('admin.manageuser.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|string',
            'fullname' => 'required|string',
            's_name' => 'required|string',
            'description' => 'required|string',
        ]);

        Manageuser::create($request->all());
        return redirect()->route('manageuser.index')->with('success', 'Grantee created successfully.');
    }

    // public function edit(Grantees $Grantees)
    // {
    //     return view('admin.manageuser.edit', compact('Grantees'));
    // }

    // public function update(Request $request, Grantees $Grantees)
    // {
    //     $request->validate([
    //         'student_id' => 'required|string',
    //         'fullname' => 'required|string',
    //         's_name' => 'required|string',
    //         'description' => 'required|string',
    //     ]);

    //     $Grantees->update($request->all());
    //     return redirect()->route('manageuser.index')->with('success', 'Gratee updated successfully.');
    // }

    // public function destroy(Grantees $Grantees)
    // {
    //     $Grantees->delete();
    //     return redirect()->route('manageuser.index')->with('success', 'Grantee deleted successfully.');
    // }
}
