<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    // সব রেকর্ড দেখান
    public function index()
    {
        $schools = School::all();
        return view('schools.index', compact('schools'));
    }

    // নতুন ফর্ম দেখান
    public function create()
    {
        return view('schools.create');
    }

    // নতুন রেকর্ড সেভ করুন
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'address' => 'required|string',
            'roll_no' => 'required|string|max:50',
            'section' => 'required|string|max:10',
        ]);

        School::create($request->all());

        return redirect()->route('schools.index')
                         ->with('success', 'স্কুল সফলভাবে যোগ করা হয়েছে!');
    }

    // একটি রেকর্ড দেখান
    public function show(School $school)
    {
        return view('schools.show', compact('school'));
    }

    // এডিট ফর্ম দেখান
    public function edit(School $school)
    {
        return view('schools.edit', compact('school'));
    }

    // রেকর্ড আপডেট করুন
    public function update(Request $request, School $school)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'address' => 'required|string',
            'roll_no' => 'required|string|max:50',
            'section' => 'required|string|max:10',
        ]);

        $school->update($request->all());

        return redirect()->route('schools.index')
                         ->with('success', 'স্কুল সফলভাবে আপডেট হয়েছে!');
    }

    // রেকর্ড মুছুন
    public function destroy(School $school)
    {
        $school->delete();

        return redirect()->route('schools.index')
                         ->with('success', 'স্কুল সফলভাবে মুছে ফেলা হয়েছে!');
    }
}